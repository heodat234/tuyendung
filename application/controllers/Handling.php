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
		// $this->load->helper('url');
		// $this->load->model('sllonlineadmin');  
		$this->load->helper('form');
		
		// $this->load->library('excel');

		$this->load->library('session');
		
		
		$this->load->model(array('Login_model'));
		$this->load->helper(array('url','my_helper','file'));
		$this->data['header'] = $this->load->view('home/header',null,true);
	    $this->data['menu'] = $this->load->view('home/menu',null,true);
	    $this->data['footer'] = $this->load->view('home/footer',null,true);
	}
	public function index()
	{

		$data['chinhsach'] = "active";
		$this->data['menu'] = $this->load->view('home/menu',$data,true);
		$this->data['temp'] = $this->load->view('page/chinhsachnhansu',$data,true);
		$this->load->view('home/master',$this->data);
	}
	public function cohoi_nghe_nghiep()
	{
		$data['cohoi'] = "active";
		$this->data['menu'] = $this->load->view('home/menu',$data,true);
		$this->data['temp'] = $this->load->view('page/cohoi_nghe_nghiep',$data,true);
		$this->load->view('home/master',$this->data);
	}
	public function co_hoi_nghe_nghiep_detail($id='')
	{
		$data['temp'] = $id;
		$this->data['temp'] = $this->load->view('page/cohoi_nghe_nghiep_detail',$data,true);
		$this->load->view('home/master',$this->data);
	}
	public function hoso_canhan()
	{
		$data['hoso'] = "active";
		$data['candidate'] = $this->Login_model->selectTableById('candidate',$this->session->userdata('user')['candidateid']);
		$this->data['menu'] = $this->load->view('home/menu',$data,true);
		$this->data['temp'] = $this->load->view('page/hoso_canhan',$data,true);
		$this->load->view('home/master',$this->data);	
	}
	public function lichsu_apply()
	{
		$data['ls'] = "active";
		$this->data['menu'] = $this->load->view('home/menu',$data,true);
		$this->data['temp'] = $this->load->view('page/lichsu_ungtuyen',$data,true);
		$this->load->view('home/master',$this->data);	
	}
	public function lichsu_detail()
	{
		$data['ls'] = "active";
		$this->data['menu'] = $this->load->view('home/menu',$data,true);
		$this->data['temp'] = $this->load->view('page/lichsu_detail',$data,true);
		$this->load->view('home/master',$this->data);	
	}
	public function update_introduce()
	{
		$frm = $this->input->post();	
		$data['introduction'] = $frm['currentbenefit'];
		$data['currentbenefit'] = $frm['desirebenefit'];
		$data['desirebenefit'] = $frm['desirebenefit'];
		$data['profilesrc'] = $frm['desirebenefit'];
 	}
 	public function upload_image()
 	{
 		if (!empty($_FILES['image']['name'])) {
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
          $uploadData = $this->upload->data();
          $data["imagelink"] = $uploadData['file_name'];
       	 } else{
         	 $data["imagelink"] = 'unknow.jpg';
	        }
	      }else{
	        $data["imagelink"] = 'unknow.jpg';
	      }
	      $this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	      header('location:hoso_canhan');
	      
	      // echo $_FILES['image']['name'];
 	}
}
?>