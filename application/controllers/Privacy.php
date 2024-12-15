<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

public function __construct()
{ 
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    //$this->laod->model("Location_Model");
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

public function index()
{ 	
	$contact=array('section_id'=>1);
	$data['title']="About";
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi = array('section_id' =>4);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$data['brand']=$this->Product_Model->fsubproduct('products');
	$banner=array('banner_section'=>'privacy');
	$data['banner'] = $this->home_model->bannerr("banner",$banner);
    	//echo '<pre>'; print_r($data['content']);exit;
	$data['containt'] = "batteryworld/privacy.php";
	$this->load->view('front',$data);
}
	public function about()
	{ 
		
		    // echo "<pre>";
			// echo  json_encode($data['content']);
			// echo "<pre>";
			// echo  json_encode($data['logo']);
			// echo "<pre>";
			// echo  json_encode($data['fav']);

			echo  json_encode($data);exit;
	}

	
	}