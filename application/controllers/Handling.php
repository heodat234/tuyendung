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
		$arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_city',false, stream_context_create($arrContextOptions)),true)  ;
        $data['city'] =$_jsoncity;
        $data['address'] = $this->Login_model->selectTableByIds('canaddress',$this->session->userdata('user')['candidateid']);
		$data['candidate'] = $this->Login_model->selectTableById('candidate',$this->session->userdata('user')['candidateid']);
		$data['family'] = $this->Login_model->selectTableByIds('cansocial',$this->session->userdata('user')['candidateid']);
		$data['experience'] = $this->Login_model->selectTableByIds('canexperience',$this->session->userdata('user')['candidateid']);
		$data['reference'] = $this->Login_model->selectTableByIds('canreference',$this->session->userdata('user')['candidateid']);
		$data['knowledge'] = $this->Login_model->selectTableByIds('canknowledge',$this->session->userdata('user')['candidateid']);
		$data['language'] = $this->Login_model->selectTableByIds('canlanguage',$this->session->userdata('user')['candidateid']);
		$data['software'] = $this->Login_model->selectTableByIds('cansoftware',$this->session->userdata('user')['candidateid']);
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
		$data['introduction'] = $frm['introduction'];
		$data['currentbenefit'] = $frm['cur_benefit'];
		$data['desirebenefit'] = $frm['desirebenefit'];

		if (!empty($_FILES['profilesrc']['name'])) {
	        $config['upload_path'] = './public/document/';
	        $config['allowed_types'] = 'pdf|doc|docx';
	        $config['file_name'] = $_FILES['profilesrc']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

        if ($this->upload->do_upload('profilesrc')) {
          $uploadData = $this->upload->data();
          $data["profilesrc"] = $uploadData['file_name'];
        	
       		 } 
	     }
	      $this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	      header('location:hoso_canhan');
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
 	public function update_profile()
 	{
 		$frm = $this->input->post();	
		$data['firstname'] = $frm['ten'];
		$data['lastname'] = $frm['ho'];
		$data['dateofbirth'] =  date("Y-m-d", strtotime($frm['ngaysinh1']));
		$data['gender'] = $frm['gender'];
		$data['placeofbirth'] = $frm['noisinh'];
		$data['ethnic'] = $frm['ethnic'];
		$data['nationality'] = $frm['quoctich'];
		$data['idcard'] = $frm['cmnd'];
		$data['dateofissue'] =  date("Y-m-d", strtotime($frm['dateofissue']));
		$data['placeofissue'] = $frm['placeofissue'];
		$this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	     header('location:hoso_canhan');
 	}
 	public function ins_upd_e_phone()
 	{
 		$frm = $this->input->post();	
		$data['email'] = $frm['email'];
		$data['telephone'] = $frm['dt1'];		
		$this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
		header('location:hoso_canhan');
 	}
 	public function ins_upd_address()
 	{
 		$frm = $this->input->post();
 		if($frm['checkup'] == "PREMANENT")
		{
			$data1['country'] = $frm['quocgia'];
			$data1['city'] = $frm['thanhpho'];
			$data1['district'] = $frm['quanhuyen'];
			$data1['ward'] = $frm['phuongxa'];
			$data1['stress'] = $frm['duong'];
			$data1['addressno'] = $frm['toanha'];
			$data1['address'] = $frm['toanha'].", ".$frm['duong'].", ".$frm['phuongxa'].", ".$frm['quanhuyen'].", ".$frm['thanhpho'];
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'addtype' => "PREMANENT");
			$this->Login_model->UpdateData("canaddress",$array,$data1);

		}
		if($frm['checkup'] == "1")
		{
			$data1['country'] = $frm['quocgia'];
			$data1['city'] = $frm['thanhpho'];
			$data1['district'] = $frm['quanhuyen'];
			$data1['ward'] = $frm['phuongxa'];
			$data1['stress'] = $frm['duong'];
			$data1['addressno'] = $frm['toanha'];
			$data1['address'] = $frm['toanha'].", ".$frm['duong'].", ".$frm['phuongxa'].", ".$frm['quanhuyen'].", ".$frm['thanhpho'];
			$data1['addtype'] = "PREMANENT";
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canaddress",$data1);
		}
		if($frm['checkup'] == "CONTACT")
		{
			$data1['country'] = $frm['quocgia'];
			$data1['city'] = $frm['thanhpho'];
			$data1['district'] = $frm['quanhuyen'];
			$data1['ward'] = $frm['phuongxa'];
			$data1['stress'] = $frm['duong'];
			$data1['addressno'] = $frm['toanha'];
			$data1['address'] = $frm['toanha'].", ".$frm['duong'].", ".$frm['phuongxa'].", ".$frm['quanhuyen'].", ".$frm['thanhpho'];
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'addtype' => "CONTACT");
			$this->Login_model->UpdateData("canaddress",$array,$data1);

		} 
		if($frm['checkup'] == "2")
		{
			$data1['country'] = $frm['quocgia'];
			$data1['city'] = $frm['thanhpho'];
			$data1['district'] = $frm['quanhuyen'];
			$data1['ward'] = $frm['phuongxa'];
			$data1['stress'] = $frm['duong'];
			$data1['addressno'] = $frm['toanha'];
			$data1['address'] = $frm['toanha'].", ".$frm['duong'].", ".$frm['phuongxa'].", ".$frm['quanhuyen'].", ".$frm['thanhpho'];
			$data1['addtype'] = "CONTACT";
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canaddress",$data1);
		}
		header('location:hoso_canhan');
 	}
 	public function ins_upd_relationship()
 	{
 		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['type'] = $frm['quanhe'];
 			$data1['name'] = $frm['hoten'];
 			$data1['yob'] = $frm['namsinh'];
 			$data1['career'] = $frm['nghenghiep'];
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("cansocial",$array,$data1);
 		}
 		else
 		{
 			$data1['type'] = $frm['quanhe'];
 			$data1['name'] = $frm['hoten'];
 			$data1['yob'] = $frm['namsinh'];
 			$data1['career'] = $frm['nghenghiep'];
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("cansocial",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function ins_upd_experience()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['company'] = $frm['tencty'];
 			$data1['position'] = $frm['chucvukhinghi'];
 			$data1['responsibility'] = $frm['nhiemvu'];
 			$data1['quitreason'] = $frm['lydonghi'];
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("canexperience",$array,$data1);
 		}
 		else
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['company'] = $frm['tencty'];
 			$data1['position'] = $frm['chucvukhinghi'];
 			$data1['responsibility'] = $frm['nhiemvu'];
 			$data1['quitreason'] = $frm['lydonghi'];
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canexperience",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function ins_upd_reference()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['name'] = $frm['hoten'];
 			$data1['position'] = $frm['chucvu'];
 			$data1['company'] = $frm['congty'];
 			$data1['contactno'] = $frm['lienhe'];
 			
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("canreference",$array,$data1);
 		}
 		else
 		{
 			$data1['name'] = $frm['hoten'];
 			$data1['position'] = $frm['chucvu'];
 			$data1['company'] = $frm['congty'];
 			$data1['contactno'] = $frm['lienhe'];
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canreference",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function ins_upd_knowledge()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['trainingcenter'] = $frm['tentruong'];
 			$data1['trainingplace'] = $frm['noihoc'];
 			$data1['trainingcourse'] = $frm['nganhhoc'];
 			$data1['certificate'] = $frm['trinhdo'];
 			$data1['highestcer'] = isset($frm['caonhat'])?$frm['caonhat']:"N";
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("canknowledge",$array,$data1);
 		}
 		else
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['trainingcenter'] = $frm['tentruong'];
 			$data1['trainingplace'] = $frm['noihoc'];
 			$data1['trainingcourse'] = $frm['nganhhoc'];
 			$data1['certificate'] = $frm['trinhdo'];
 			$data1['highestcer'] = isset($frm['caonhat'])?$frm['caonhat']:"N";
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canknowledge",$data1);
 		}
 		header('location:hoso_canhan');
	}
 	public function ins_upd_knowledge_v2()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['trainingcenter'] = $frm['cs_daotao'];
 			$data1['traintime'] = $frm['tghoc'];
 			$data1['traintimetype'] = $frm['donvi'];
 			$data1['trainingcourse'] = $frm['nganhhoc'];
 			$data1['certificate'] = $frm['bangcap'];
 			
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("canknowledge",$array,$data1);
 		}
 		else
 		{
 			$data1['datefrom'] = date("Y-m-d", strtotime($frm['tu'])); 
 			$data1['dateto'] = date("Y-m-d", strtotime($frm['den'])) ;
 			$data1['trainingcenter'] = $frm['cs_daotao'];
 			$data1['traintime'] = $frm['tghoc'];
 			$data1['traintimetype'] = $frm['donvi'];
 			$data1['trainingcourse'] = $frm['nganhhoc'];
 			$data1['certificate'] = $frm['bangcap'];
 			
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canknowledge",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function ins_upd_language()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['language'] = $frm['tentruong'];
 			$data1['rate1'] = $frm['nghe'];
 			$data1['rate2'] = $frm['noi'];
 			$data1['rate3'] = $frm['doc'];
 			$data1['rate4'] = $frm['viet'];

			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("canlanguage",$array,$data1);
 		}
 		else
 		{
 			$data1['language'] = $frm['tentruong'];
 			$data1['rate1'] = $frm['nghe'];
 			$data1['rate2'] = $frm['noi'];
 			$data1['rate3'] = $frm['doc'];
 			$data1['rate4'] = $frm['viet'];
 			
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canlanguage",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function ins_upd_software()
	{
		$frm = $this->input->post();	
 		if($frm['checkup'] != "0")
 		{
 			$data1['software'] = $frm['phanmem'];
 			$data1['rate1'] = $frm['trinhdo'];
 			

			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
			$this->Login_model->UpdateData("cansoftware",$array,$data1);
 		}
 		else
 		{
 			$data1['software'] = $frm['phanmem'];
 			$data1['rate1'] = $frm['trinhdo'];
 			
 			
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("cansoftware",$data1);
 		}
 		header('location:hoso_canhan');
	}
	public function del_relationship()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("cansocial",$array);
		header('location:hoso_canhan');
	}
	public function del_experience()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canexperience",$array);
		header('location:hoso_canhan');
	}
	public function del_reference()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canreference",$array);
		header('location:hoso_canhan');
	}
	public function del_knowledge()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canknowledge",$array);
		header('location:hoso_canhan');
	}
	public function del_language()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canlanguage",$array);
		header('location:hoso_canhan');
	}
	public function del_software()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("cansoftware",$array);
		header('location:hoso_canhan');
	}
}
?>