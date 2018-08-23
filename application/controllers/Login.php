<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $fb;
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url','string','security'));
		$this->load->model(array('Login_model'));
		$this->load->library(array('form_validation','session'));

		$config = array(
		    'protocol'  =>  'smtp',
		    'smtp_host' =>  'ssl://smtp.googlemail.com',
		    'smtp_port' =>  465,
		    'smtp_user' =>  'hososuckhoe.org@gmail.com',
		    'smtp_pass' =>  'hungminhits',
		    'mailtype'  =>  'html', 
		    'charset'   =>  'utf-8',
		);
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		

		// $this->_data['html_header'] = $this->load->view('home/header', NULL, TRUE);  
		
        
        
	}
	public function index($value='')
	{
		phpinfo();
	}
	
	//đăng nhập thường
	public function loginUser()
	{
		$frm = $this->input->post();

		$username = $frm['email'];
		$password = md5($frm['password']);
		$a_UserChecking = $this->Login_model->a_fCheckUser( $username, $password );
		if($a_UserChecking){
			$this->session->set_userdata('user', $a_UserChecking);
			echo json_encode($a_UserChecking);
		}else{
			echo "1";
		}
	}

	//đăng kí tài khoản mới
	public function insertUser()
	{
		$frm = $this->input->post();
		$a_UserInfo['name'] = $frm['name'];
		$a_UserInfo['email'] = $frm['email'];
		$a_UserInfo['password'] = md5($frm['password']);
		$a_UserInfo['phone'] 		= $frm['phone'];
		$a_UserInfo['dia_chi'] 		= $frm['dia_chi'];
		$a_UserInfo['gioi_tinh'] 	= $frm['gioi_tinh'];
		$a_UserInfo['ngay_sinh'] 	= $frm['ngay_sinh'];
		$a_UserInfo['cmnd'] 		= $frm['cmnd'];
		$a_UserInfo['nhom_mau'] 	= $frm['nhom_mau'];
		if ($this->Login_model->checkMail( $a_UserInfo['email'] )) {
			$this->b_Check = false;
		}else{
			$this->b_Check = true;

			if (!empty($_FILES['avatar']['name'])) {
			
				$config['upload_path'] = './images/avatar';
				$config['allowed_types'] = 'jpg|png';
				$config['file_name'] = $_FILES['avatar']['name'];
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('avatar')) {
					$uploadData = $this->upload->data();
					$a_UserInfo['avatar']  = $uploadData['file_name'];
				} else{
					$error = $this->upload->display_errors();
            		echo $error;
					$a_UserInfo['avatar'] = '';
				}
			}else{
				$a_UserInfo['avatar']  = '';
			}

			$this->Login_model->insertUser( $a_UserInfo );
			$this->email->from('hososuckhoe.org@gmail.com', 'Hồ sơ sức khỏe');
			//cau hinh nguoi nhan
			$this->email->to($a_UserInfo['email']);
			$this->email->subject('Xác nhận tài khoản');
			$this->email->message('Cảm ơn bạn đã đăng ký tài khoản tại hososuckhoe.org. Bấm vào <a href="'.base_url().'activeUser/'.$a_UserInfo['email'].'/'.$this->a_Data['csrf']['hash'].'">đây</a> để xác nhận tài khoản của bạn.<br>');
			 
			//thuc hien gui
			$this->email->send();

			$this->a_Data['a_Check']= 'Tài khoản của bạn đã được đăng ký. Vui lòng vào mail để kiểm tra và xác nhận tài khoản trước khi đăng nhập.';
			$this->_data['html_body'] = $this->load->view('page/login', $this->a_Data, TRUE);
        	return $this->load->view('home/master', $this->_data);
		}
		$this->a_Data['b_Check']= $this->b_Check;
		$this->_data['html_body'] = $this->load->view('page/register',$this->a_Data, TRUE);
        return $this->load->view('home/master', $this->_data);
	}

	public function activeUser($email, $token){
        $this->Login_model->activeUser($email);
        $this->a_Data['d_Check']= true;
		$this->_data['html_body'] = $this->load->view('page/login',$this->a_Data, TRUE);
        return $this->load->view('home/master', $this->_data);

    }
	
	//đăng xuất
	public function logout($value='')
	{
		$this->session->unset_userdata('user');	// Unset session of user
		redirect(base_url(''));
	}

	//lấy lại password, gửi qua mail
	public function forgotPassword()
	{
		$mail = $this->input->post('email');
		 
		//cau hinh email va ten nguoi gui
		$this->email->from('hososuckhoe.org@gmail.com', 'Hồ sơ sức khỏe');
		//cau hinh nguoi nhan
		$this->email->to($mail);
		$this->email->subject('Lấy lại mật khẩu');
		$this->email->message('Bấm vào <a href="'.base_url().'login">đây</a> để đăng nhập bằng mật khẩu bên dưới và đổi mật khẩu mới cho tài khoản của bạn.<br>
			Mật khẩu mới: <b>'.random_string('alnum',8).'</b><br>');
		 
		
		//thuc hien gui
		$this->email->send();
	    $this->c_Check = true;
	    $this->a_Data['c_Check']= $this->c_Check;
		$this->_data['html_body'] = $this->load->view('page/login',$this->a_Data, TRUE);
    	return $this->load->view('home/master', $this->_data);

		
	}

	public function checkPassword()
	{
		$password 	= $this->input->post('pass');
		$id 		= $this->input->post('id');
		$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
		);
		$this->a_Data['csrf'] = $csrf;
		$this->a_Data['data'] = $this->Login_model->checkPassword($id, $password);
		print_r(json_encode($this->a_Data));
	}

	public function editPassword()
	{
		// var_dump($this->input->post());
		$data['password'] = md5($this->input->post('new_pass'));
		$data['id'] = $this->input->post('id');
		$this->Login_model->editPassword($data);
		$this->session->unset_userdata('user');
		redirect(base_url('pageLogin'));
	}

	



	
}