<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Candidate_model extends CI_Model{
	
	function __construct(){
        parent::__construct();
        $this->load->database();
    } 
    public function countTableById($table,$id)
    {
        $this->db->select()->where('candidateid', $id);
        $this->db->where('hidden', 1);
        $query = $this->db->get($table)->num_rows();
        if ($query >0) {
            return true;
        }else{ return false;}
    }
    
    public function selectTableById($table,$id)
    {
        $this->db->select()->where('candidateid', $id);
        $this->db->where('hidden', 1);
        $query = $this->db->get($table);
       return $query->row_array();
    }
    public function selectTableByIds($table,$id)
    {
        $this->db->select();
        $this->db->where('candidateid', $id);
        $this->db->where('hidden', 1);
        $query = $this->db->get($table);
       return $query->result_array();
    }

    public function selectAllCan()
    {   
        $this->db->select(' candidateid, certificate, highestcer');
        $this->db->from('canknowledge');    
        $this->db->where('highestcer','Y');
        $this->db->where('hidden',1);
        $knowledge = $this->db->get()->result_array();

        $kinhnghiem = $this->db->select('f.candidateid, f.datefrom, f.dateto, f.lastupdate, f.hidden')
        ->from(' ( select candidateid, max(lastupdate) as maxvalue from canexperience where hidden = 1 group by candidateid ) 
        as x inner join canexperience as f on f.candidateid = x.candidateid and f.lastupdate = x.maxvalue ')
        ->get()->result_array();

        $ngonngu = $this->db->select('f.candidateid, f.language, x.sl, f.hidden')
        ->from(' ( select candidateid, max(lastupdate) as maxvalue, count(candidateid) as sl from canlanguage where hidden = 1 group by candidateid ) 
        as x inner join canlanguage as f on f.candidateid = x.candidateid and f.lastupdate = x.maxvalue ')
        ->get()->result_array();

        $phanmem = $this->db->select('f.candidateid, f.software, x.sl, f.hidden')
        ->from(' ( select candidateid, max(lastupdate) as maxvalue, count(candidateid) as sl from cansoftware where hidden = 1 group by candidateid ) 
        as x inner join cansoftware as f on f.candidateid = x.candidateid and f.lastupdate = x.maxvalue ')
        ->get()->result_array();

        $this->db->select('*');
        $this->db->from('candidate as c');
        $this->db->where('c.hidden', 1);
        $candidate = $this->db->get()->result_array();

        for($i = 0 ; $i < count($candidate) ; $i++)
        {
            $data[$i]['candidateid'] = $candidate[$i]['candidateid'];
            $data[$i]['email'] = $candidate[$i]['email'];
            $data[$i]['gender'] = $candidate[$i]['gender'];
            $data[$i]['dateofbirth'] = $candidate[$i]['dateofbirth'];
            $data[$i]['weight'] = $candidate[$i]['weight'];
            $data[$i]['height'] = $candidate[$i]['height'];
            $data[$i]['name'] = $candidate[$i]['name'];
            $data[$i]['imagelink'] = $candidate[$i]['imagelink'];
            $data[$i]['desirebenefit'] = $candidate[$i]['desirebenefit'];
            $data[$i]['certificate'] = "";
            $data[$i]['datefrom'] = null;
            $data[$i]['dateto'] = null;
            $data[$i]['language'] = "";
            $data[$i]['countlanguage'] = 0;
            $data[$i]['software'] = "";
            $data[$i]['countsoftware'] = 0;
            foreach ($knowledge as $key) {
                if($candidate[$i]['candidateid'] == $key['candidateid'])
                {
                    $data[$i]['certificate'] = $key['certificate'];
                    break;
                }
            }
            foreach ($kinhnghiem as $key) {
                if($candidate[$i]['candidateid'] == $key['candidateid'])
                {
                    $data[$i]['datefrom'] = $key['datefrom'];
                    $data[$i]['dateto'] = $key['dateto'];
                    break;
                }
            } 
            foreach ($ngonngu as $key) {
                if($candidate[$i]['candidateid'] == $key['candidateid'])
                {
                    $data[$i]['language'] = $key['language'];
                    $data[$i]['countlanguage'] = $key['sl'];
                    break;
                }
            } 
            foreach ($phanmem as $key) {
                if($candidate[$i]['candidateid'] == $key['candidateid'])
                {
                    $data[$i]['software'] = $key['software'];
                    $data[$i]['countsoftware'] = $key['sl'];
                    break;
                }
            } 
        }
        return $data;  
    }
    public function InsertData($table,$data)
    {
        $a_User =   $this->db->insert($table,$data);
    }
    public function UpdateData($table,$match,$data)
    {
        $a_User =   $this->db->where($match)
                            ->update($table,$data);
    }
    public function DeleteData($table,$match)
    {
        $data = array('hidden' => 0 );
        $a_User =   $this->db->where($match)
                            ->update($table,$data);
    }
    function select_row_option($select,$where,$orwhere,$table,$join,$limit,$order_by,$like,$or_like){
        $this->db->select($select);
        $this->db->from($table);
        if(!empty($join)){

            foreach ($join as $key => $value) {
                // var_dump($value['table']);
                $this->db->join($value['table'],$value['match'], 'LEFT');       
            }
        }
        $this->db->where($where);
        if(!empty($orwhere))$this->db->or_where($orwhere);
        if(!empty($like))$this->db->like($like);
        if(!empty($or_like))$this->db->or_like($or_like);
        if(!empty($order_by))$this->db->order_by($order_by['colname'],$order_by['typesort']);
        if(!empty($limit))$this->db->limit($limit['numrow'],$limit['start']);
        $query = $this->db->get();
        if (!$query) {
            return $this->db->error();
        }else{
            return $query->result_array();
        }
    }
    // public function search_customer($table, $data)
    // {
    //     if($data['roleid'] == 1) {
    //         $query = "SELECT * FROM $table WHERE hidden = '0'";
    //     }
    //     if ($data['roleid'] == 2) {
    //         $query = "SELECT * FROM $table WHERE hidden = '0' AND roleid = '3'";
    //     }
        
    //     $conditions = array();

    //     if(isset($data['custname'])) {
    //       $conditions[] = "custname LIKE '%".$data['custname']."%'";
    //     }
    //     if(isset($data['idcard'])) {
    //       $conditions[] = "idcard LIKE '%".$data['idcard']."%'";
    //     }
    //     if(isset($data['telephone'])) {
    //       $conditions[] = "telephone LIKE '%".$data['telephone']."%'";
    //     }
    //     if(isset($data['email'])) {
    //       $conditions[] = "email LIKE '%".$data['email']."%'";
    //     }
    //     if(isset($data['custid'])) {
    //       $conditions[] = "custid LIKE '%".$data['custid']."%'";
    //     }

    //     $sql = $query;
    //     if(!empty($data['search'])) {
    //       $sql .= " AND (custid LIKE '%".$data['search']."%' OR custname LIKE '%".$data['search']."%' OR email LIKE '%".$data['search']."%' OR idcard LIKE '%".$data['search']."%' OR telephone LIKE '%".$data['search']."%')";
    //     }
    //     if (count($conditions) > 0) {
    //       $sql .= " AND " . implode(' AND ', $conditions);
    //     }
        
        
    //     $query = $this->db->query($sql)->result_array();
    //     return $query;
    // }

}
?>