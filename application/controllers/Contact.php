<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

public function __construct()
{ 
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Enquery_Model');
     $this->load->model('Product_Model');
    $this->load->model('home_model');
   // $this->laod->model("");
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

public function index()
{ 	 
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi = array('section_id' =>2);	
	$logo = array('sessting_id' =>4);
	$data['title']="Contact Us";
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$data['brand']=$this->Product_Model->fsubproduct('products');
	
		//$data['content'] = $this->home_model->home("setting_table",$section);
		//echo "<pre>"; print_r($data['contact']);exit;
		$data['containt'] = "batteryworld/contact.php";
	$this->load->view('front',$data);
}

public function inquery()
{

		    //echo "<pre>"; print_r($_POST);exit;
		           		$maildate=date("y-m-d");
			        	$emaildata= array("message"  => $_POST['enquiry'],
						        	 "inquery_date"  => $maildate,
						        		  "inqury_name"  => $_POST['name'],
						        	   "inquery_email"  => $_POST['email']);
			        	if($fire=$this->Enquery_Model->replymail("inquety",$emaildata))
			        	{
			        		$this->session->set_flashdata('success', 'Inquery Successfully Submit.');
			        		redirect('contact');
			        	}
		       
}

	
	
	}