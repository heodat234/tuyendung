<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecruitProcess extends CI_Controller {
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
		$this->data['script'] = $this->load->view('admin/script/script_newsrecruit', NULL, TRUE); 
		$this->data['temp'] = $this->load->view('admin/process/index',null,true);
		$this->load->view('admin/home/master',$this->data);
	}

	public function detail()
	{
		$this->data['temp'] = $this->load->view('admin/process/detail',null,true);
		$this->load->view('admin/home/master',$this->data);
	}

}

/* End of file RecruitProcess.php */
/* Location: ./application/controllers/admin/RecruitProcess.php */
?>