<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','my_helper','file'));
		$this->load->model(array('admin/Candidate_model'));
		$this->load->library('session');
		$this->_data['header'] 	= $this->load->view('admin/home/header',null,true);
	    $this->_data['menu']   	= $this->load->view('admin/home/menu',null,true);
	    $this->_data['footer'] 	= $this->load->view('admin/home/footer',null,true);
	}

	public function index(){
		$this->load->view('admin/master',$this->_data);
	}

	public function main(){

		$this->_data['main'] 	= $this->load->view('admin/campaign/main',null,true);

		$this->load->view('admin/master',$this->_data);
	}

	public function round_1_1(){
		$this->data1['candidate'] = $this->Candidate_model->selectAllCan();
		$this->data1['nav'] = $this->load->view('admin/campaign/nav',null,true);
		$this->_data['temp'] 	= $this->load->view('admin/campaign/round_1_1',$this->data1,true);

		$this->load->view('admin/home/master',$this->_data);
	}
}
?>