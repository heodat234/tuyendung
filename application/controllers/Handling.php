<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		
		
		
		$this->load->helper('url');
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
}
?>