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
		

		$this->load->helper('url');
		
		

		$this->load->library('session');
		
		
		$this->load->model(array('admin/Candidate_model'));
		// $this->load->helper(array('url','my_helper','file'));
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
	public function profile()
	{
		$this->data1['nav'] = $this->load->view('admin/page/nav-profile',null,true);
	
		$this->data['temp'] = $this->load->view('admin/page/profile',$this->data1,true);

		$this->load->view('admin/home/master',$this->data);
	}
	public function hosochitiet()
	{
		$data['temp'] = $this->load->view('admin/page/detail-profile',null,true);
		$this->load->view('admin/home/master-profile',$data);
	}

}
?>