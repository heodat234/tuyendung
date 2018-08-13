<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->data['header'] = $this->load->view('home/header',null,true);
	    $this->data['menu'] = $this->load->view('home/menu',null,true);
	    $this->data['footer'] = $this->load->view('home/footer',null,true);
	}
	public function index()
	{
		$data['temp'] = 213123;
		$this->data['temp'] = $this->load->view('home/content',$data,true);
		$this->load->view('home/master',$this->data);
		
	}
}
?>