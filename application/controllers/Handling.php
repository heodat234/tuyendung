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
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		
		$this->load->model(array('Login_model','Candidate_model'));
		$this->load->helper(array('url','my_helper','file'));
		$this->datamenu['address'] = $this->Candidate_model->countTableById('canaddress',$this->session->userdata('user')['candidateid']);
		$this->datamenu['candidate'] = $this->Candidate_model->selectTableById('candidate',$this->session->userdata('user')['candidateid']);
		$this->datamenu['family'] = $this->Candidate_model->countTableById('cansocial',$this->session->userdata('user')['candidateid']);
		$this->datamenu['experience'] = $this->Candidate_model->countTableById('canexperience',$this->session->userdata('user')['candidateid']);
		$this->datamenu['reference'] = $this->Candidate_model->countTableById('canreference',$this->session->userdata('user')['candidateid']);
		$this->datamenu['knowledge'] = $this->Candidate_model->countTableById('canknowledge',$this->session->userdata('user')['candidateid']);
		$this->datamenu['language'] = $this->Candidate_model->countTableById('canlanguage',$this->session->userdata('user')['candidateid']);
		$this->datamenu['software'] = $this->Candidate_model->countTableById('cansoftware',$this->session->userdata('user')['candidateid']);
		
		$this->data['header'] = $this->load->view('home/header',null,true);
	    $this->data['footer'] = $this->load->view('home/footer',null,true);
	}
	public function index()
	{

		$this->datamenu['chinhsach'] = "active";
		
		$this->data['modal'] = $this->load->view('home/modal-master',null,true);
		$this->data['menu'] = $this->load->view('home/menu',$this->datamenu,true);
		$this->data['temp'] = $this->load->view('page/chinhsachnhansu',null,true);
		$this->load->view('home/master',$this->data);
	}
	public function cohoi_nghe_nghiep()
	{
		$this->datamenu['cohoi'] = "active";
		$this->data['modal'] = $this->load->view('home/modal-master',null,true);
		$this->data['menu'] = $this->load->view('home/menu',$this->datamenu,true);
		$this->data['temp'] = $this->load->view('page/cohoi_nghe_nghiep',null,true);
		$this->load->view('home/master',$this->data);
	}
	public function co_hoi_nghe_nghiep_detail($id='')
	{
		$data['temp'] = $id;
		$this->data['temp'] = $this->load->view('page/cohoi_nghe_nghiep_detail',$data,true);
		$this->load->view('home/master',$this->data);
	}
	public function hoso_canhan($tab = 'one')
	{

		if($this->session->has_userdata('user')) {
			$data['hoso'] = "active";
			$arrContextOptions=array(
	            "ssl"=>array(
	                "verify_peer"=>false,
	                "verify_peer_name"=>false,
	            ),
	        );
	        if ( ! $data['city'] = $this->cache->get('city'))
    		 {
		           $_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_city',false, stream_context_create($arrContextOptions)),true)  ;
		          $this->cache->save('city', $_jsoncity, 36000);
		          $data['city'] = $_jsoncity;
		     }
		      if ( !  $data['address'] = $this->cache->get('address'))
    		 {
		           $_jsoncity = $this->Candidate_model->selectTableByIds('canaddress',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('address', $_jsoncity, 3600);
		          $data['address'] = $_jsoncity;
		     }
	       	if ( !  $data['candidate'] = $this->cache->get('candidate'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableById('candidate',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('candidate', $_jsoncity, 3600);
		          $data['candidate'] = $_jsoncity;
		     }
	        if ( !  $data['family'] = $this->cache->get('family'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('cansocial',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('family', $_jsoncity, 3600);
		          $data['family'] = $_jsoncity;
		     }
		     if ( !  $data['experience'] = $this->cache->get('experience'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('canexperience',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('experience', $_jsoncity, 3600);
		          $data['experience'] = $_jsoncity;
		     }
	        if ( !  $data['reference'] = $this->cache->get('reference'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('canreference',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('reference', $_jsoncity, 3600);
		          $data['reference'] = $_jsoncity;
		     }
			if ( !  $data['knowledge'] = $this->cache->get('knowledge'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('canknowledge',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('knowledge', $_jsoncity, 3600);
		          $data['knowledge'] = $_jsoncity;
		     }
			if ( !  $data['language'] = $this->cache->get('language'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('canlanguage',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('language', $_jsoncity, 3600);
		          $data['language'] = $_jsoncity;
		     }
			if ( !  $data['software'] = $this->cache->get('software'))
    		 {
		           $_jsoncity =  $this->Candidate_model->selectTableByIds('cansoftware',$this->session->userdata('user')['candidateid']);
		          $this->cache->save('software', $_jsoncity, 3600);
		          $data['software'] = $_jsoncity;
		     }
			
			$data[$tab] = "in active";
			$this->data['menu'] = $this->load->view('home/menu',$this->datamenu,true);
			$this->data['temp'] = $this->load->view('page/hoso_canhan',$data,true);
			$this->load->view('home/master',$this->data);	
		}else{redirect(base_url());}
	}
	public function lichsu_apply()
	{
		$this->datamenu['ls'] = "active";
		
		$this->data['menu'] = $this->load->view('home/menu',$this->datamenu,true);
		$this->data['temp'] = $this->load->view('page/lichsu_ungtuyen',null,true);
		$this->load->view('home/master',$this->data);	
	}
	public function lichsu_detail()
	{
		$this->datamenu['ls'] = "active";
		$this->data['menu'] = $this->load->view('home/menu',$this->datamenu,true);
		$this->data['temp'] = $this->load->view('page/lichsu_detail',null,true);
		$this->load->view('home/master',$this->data);	
	}
	public function update_introduce()
	{
		$frm = $this->input->post();	
		$data['introduction'] = $frm['introduction'];
		$data['currentbenefit'] = $this->toInt($frm['cur_benefit']);
		$data['desirebenefit'] = $this->toInt($frm['desirebenefit']);

		if (!empty($_FILES['profilesrc']['name'])) {
	        $config['upload_path'] = './public/document/';
	        $config['allowed_types'] = 'pdf|doc|docx';
	        $config['file_name'] = $_FILES['profilesrc']['name'];
	    	$config['overwrite'] = FALSE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);


        if ($this->upload->do_upload('profilesrc')) {
          $uploadData = $this->upload->data();
          $data["profilesrc"] = $uploadData['file_name'];
        	
       		 }
       		 else
       		 {
       		 	$datas['errors'] = $this->upload->display_errors();
       		 } 
	     }
	     else
	     {
	     	$datas['errors'] = $this->upload->display_errors();
	     }
	     //var_dump($data['errors']);
	      $this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	      $this->cache->delete('candidate');
	      header('location:hoso_canhan');
 	}
 	public function upload_image()
 	{
 		if (!empty($_FILES['image']['name'])) {
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = FALSE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
          $uploadData = $this->upload->data();
          $data["imagelink"] = $uploadData['file_name'];
       	 } else{
       	 	$datas['errors'] = $this->upload->display_errors();
         	$data["imagelink"] = 'unknow.jpg';
	        }
	      }else{
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["imagelink"] = 'unknow.jpg';
	      }

	      $this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	      $this->cache->delete('candidate');
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
		$data['height'] = $frm['chieucao'];
		$data['weight'] = $frm['cannang'];
		$data['idcard'] = $frm['cmnd'];
		$data['dateofissue'] =  date("Y-m-d", strtotime($frm['dateofissue']));
		$data['placeofissue'] = $frm['placeofissue'];

		$this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
	     // header('location:hoso_canhan');
		$this->cache->delete('candidate');
		redirect(base_url('hoso_canhan.html/two'));
 	}
 	public function ins_upd_e_phone()
 	{
 		$frm = $this->input->post();	
		$data['email'] = $frm['email'];
		$data['telephone'] = $frm['dt1']." ".$frm['dt2'];	
		$data['emergencycontact'] = $frm['dtkhancap'];
		$this->Login_model->updateCandidate($this->session->userdata('user')['candidateid'],$data);
		$this->cache->delete('candidate');
		redirect(base_url('hoso_canhan.html/three'));
 	}
 	public function ins_upd_address()
 	{
 		$frm = $this->input->post();
 		$data1['country'] = $frm['quocgia'];
		$data1['city'] = $frm['thanhpho'];
		$data1['district'] = $frm['quanhuyen'];
		$data1['ward'] = $frm['phuongxa'];
		$data1['street'] = $frm['duong'];
		$data1['addressno'] = $frm['toanha'];
		$arrContextOptions=array(
        	"ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
       		 ),
	   );  
		$_jsoncity = json_decode(file_get_contents('https://hungminhits.com/api/list_city',false, stream_context_create($arrContextOptions)),true)  ;
    	foreach ($_jsoncity as $key ) {
    		if($key['id_city'] == $frm['thanhpho'])
    		{
    			$namecity = $key['name']; break;
    		}
    	}
    	
    	 $qh = json_decode(file_get_contents('https://hungminhits.com/api/list_district/'.$frm['thanhpho'].'',false, stream_context_create($arrContextOptions)),true)  ;

    	foreach ($qh as $key ) {
    		if($key['id_district'] == $frm['quanhuyen'])
    		{
    			$nameqh = $key['name']; break;
    		}
    	}

    	$px = json_decode(file_get_contents('https://hungminhits.com/api/list_ward/'.$frm['quanhuyen'].'',false, stream_context_create($arrContextOptions)),true)  ;
    	foreach ($px as $key ) {
    		if($key['id_ward'] == $frm['phuongxa'])
    		{
    			$namepx = $key['name']; break;
    		}
    	}
		if($frm['toanha'] == "")
		{
			$data1['address'] = $frm['duong'].", ".$namepx.", ".$nameqh.", ".$namecity;
		}else
		{
			$data1['address'] = $frm['toanha'].", ".$frm['duong'].", ".$namepx.", ".$nameqh.", ".$namecity;
		}
 		if($frm['checkup'] == "PREMANENT")
		{
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'addtype' => "PREMANENT");
			$this->Login_model->UpdateData("canaddress",$array,$data1);

		}
		if($frm['checkup'] == "1")
		{
			
			$data1['addtype'] = "PREMANENT";
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canaddress",$data1);
		}
		if($frm['checkup'] == "CONTACT")
		{
			
			$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'addtype' => "CONTACT");
			$this->Login_model->UpdateData("canaddress",$array,$data1);

		} 
		if($frm['checkup'] == "2")
		{
			$data1['addtype'] = "CONTACT";
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canaddress",$data1);
		}
		 $this->cache->delete('address');
		redirect(base_url('hoso_canhan.html/three'));
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
 		$this->cache->delete('family');
 		redirect(base_url('hoso_canhan.html/four'));
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
 			$data1['address'] = $frm['diachi'];
 			$data1['phone'] = $frm['sdt'];
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
 			$data1['address'] = $frm['diachi'];
 			$data1['phone'] = $frm['sdt'];
			$data1['candidateid'] = $this->session->userdata('user')['candidateid'];
			$this->Login_model->InsertData("canexperience",$data1);
 		}
 		$this->cache->delete('experience');
 		redirect(base_url('hoso_canhan.html/five'));
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
 		$this->cache->delete('reference');
 		redirect(base_url('hoso_canhan.html/five'));
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
 			if(isset($frm['caonhat']) == true)
 			{
 				$array2 = array('candidateid' => $this->session->userdata('user')['candidateid'], 'highestcer' => "Y");
 				$data2 = array('highestcer' => "N");
 				$this->Login_model->UpdateData("canknowledge",$array2,$data2);
 			}
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
 		$this->cache->delete('knowledge');
 		redirect(base_url('hoso_canhan.html/six'));
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
 		$this->cache->delete('knowledge');
 		redirect(base_url('hoso_canhan.html/six'));
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
 		$this->cache->delete('language');
 		redirect(base_url('hoso_canhan.html/seven'));
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
 		$this->cache->delete('software');
 		redirect(base_url('hoso_canhan.html/seven'));
	}
	public function del_relationship()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("cansocial",$array);
		$this->cache->delete('family');
		redirect(base_url('hoso_canhan.html/four'));
	}
	public function del_experience()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canexperience",$array);
		$this->cache->delete('experience');
		redirect(base_url('hoso_canhan.html/five'));
	}
	public function del_reference()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canreference",$array);
		$this->cache->delete('reference');
		redirect(base_url('hoso_canhan.html/five'));
	}
	public function del_knowledge()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canknowledge",$array);
		$this->cache->delete('knowledge');
		redirect(base_url('hoso_canhan.html/six'));
	}
	public function del_language()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("canlanguage",$array);
		$this->cache->delete('language');
		redirect(base_url('hoso_canhan.html/seven'));
	}
	public function del_software()
	{
		$frm = $this->input->post();
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'recordid' => $frm['checkup']);
		$this->Login_model->DeleteData("cansoftware",$array);
		$this->cache->delete('software');
		redirect(base_url('hoso_canhan.html/seven'));
	}
	public function del_address()
	{
		$frm = $this->input->post();
		$data1['country'] = "";
		$data1['city'] = "";
		$data1['district'] = "";
		$data1['ward'] = "";
		$data1['street'] = "";
		$data1['addressno'] = "";
		$data1['address'] ="";
		$array =  array('candidateid' => $this->session->userdata('user')['candidateid'], 'addtype' => $frm['checkup']);
		$this->Login_model->UpdateData("canaddress",$array,$data1);
		$this->cache->delete('address');
		redirect(base_url('hoso_canhan.html/three'));
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
    function toInt($str)
	{
	    return (int)preg_replace("/\..+$/i", "", preg_replace("/[^0-9\.]/i", "", $str));
	}
}
?>