<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Candidate_model extends CI_Model{
	
	function __construct(){
        parent::__construct();
        $this->load->database();
    } 
    public function selectAllCan()
    {
        $this->db->select();
        $this->db->where('hidden', 1);
        $query = $this->db->get('candidate');
        return $query->result_array();
    }
    
}
?>