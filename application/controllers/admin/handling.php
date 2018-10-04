<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['remove_spaces'] = true;
	    $config['file_ext_tolower'] = true;    
	    $this->load->library('upload', $config);
		

		
		$this->load->helper(array('url','my_helper','file'));
		

		$this->load->library('session');
		
		
		$this->load->model(array('admin/Candidate_model'));
		
		$this->data['header'] = $this->load->view('admin/home/header',null,true);
	    $this->data['menu'] = $this->load->view('admin/home/menu',null,true);
	    $this->data['footer'] = $this->load->view('admin/home/footer',null,true);
	}
	public function index()
	{
		$this->data1['candidate'] = $this->Candidate_model->selectAllCan();
		
		$this->data1['nav'] = $this->load->view('admin/page/nav',null,true);
		$this->data['temp'] = $this->load->view('admin/page/content',$this->data1,true);

		$this->load->view('admin/home/master',$this->data);
	}
	public function profile($id = '')
	{
		$this->data1['candidate'] = $this->Candidate_model->selectAllCan();
		$this->data1['nav'] = $this->load->view('admin/page/nav-profile',$this->data1,true);
		$this->data1['id'] = $id;
		$this->data['temp'] = $this->load->view('admin/page/profile',$this->data1,true);

		$this->load->view('admin/home/master',$this->data);
	}
	public function hosochitiet($id = '')
	{
		$arrContextOptions=array(
	            "ssl"=>array(
	                "verify_peer"=>false,
	                "verify_peer_name"=>false,
	            ),
	        );
		$_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_city',false, stream_context_create($arrContextOptions)),true);
		$this->data2['city'] = $_jsoncity;
		$this->data2['address'] = $this->Candidate_model->selectTableByIds('canaddress',$id);
		$this->data2['candidate'] = $this->Candidate_model->selectTableById('candidate',$id);
		$this->data2['family'] = $this->Candidate_model->selectTableByIds('cansocial',$id);
		$this->data2['experience'] = $this->Candidate_model->selectTableByIds('canexperience',$id);
		$this->data2['reference'] = $this->Candidate_model->selectTableByIds('canreference',$id);
		$this->data2['knowledge'] = $this->Candidate_model->selectTableByIds('canknowledge',$id);
		$this->data2['language'] = $this->Candidate_model->selectTableByIds('canlanguage',$id);
		$this->data2['software'] = $this->Candidate_model->selectTableByIds('cansoftware',$id);
		$data['temp'] = $this->load->view('admin/page/detail-profile',$this->data2,true);
		$this->load->view('admin/home/master-profile',$data);
	}
	public function selectCity()
    {
        $id_city = $this->input->post('id_city');
        	 $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_district/'.$id_city.'',false, stream_context_create($arrContextOptions)))  ;

        echo json_encode($_jsoncity);
    }
     public function selectDistrict()
    {
        $id_district = $this->input->post('id_district');
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_ward/'.$id_district.'',false, stream_context_create($arrContextOptions)))  ;
        $city = $_jsoncity;
        echo json_encode($city);
    }

}
?>