<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

public function __construct()
{ 
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Cart_model');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('Product_Model');
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

public function myaccount()
{
  $data['title']="My Account";
  $usersession=$this->session->userdata('client_details');
  //echo '<pre>'; print_r($usersession);exit;
 $userlogin=array("reg_id"=>$usersession['userid']);
 $data['userr']=$this->home_model->userdetails("registeration",$userlogin);
  $userid=array("user_id"=>$usersession['userid']);
  $data['address']=$this->home_model->userdetails("user_address",$userid);
  //echo "<pre>"; print_r($usersession);exit();
  $contact=array('section_id'=>1);
  $data['contact'] = $this->home_model->home("setting_table",$contact);
  $media=array('section_id'=>6);
  $data['media'] = $this->home_model->home("setting_table",$media);
  $condi = array('section_id' =>9); 
  $logo = array('sessting_id' =>4);
  $data['logo'] = $this->home_model->home("setting_table",$logo);
  $data['content'] = $this->home_model->home("setting_table",$condi);
  $fav = array('sessting_id' =>5);
  $orderid= array("customer_id"=>$usersession['userid']);
  $data['order']=$this->home_model->orderhistory("order_table",$orderid);
  //echo "<pre>"; print_r($data['order']);exit;
  $data['fav'] = $this->home_model->home("setting_table",$fav);
  $data['brand']=$this->Product_Model->fsubproduct('products');
  $data['containt'] = "batteryworld/my_account.php";
  $this->load->view('front',$data);

}

public function checkout()
{
  $data['title']="Checkout";
  $usersession=$this->session->userdata('client_details');
//echo '<pre>'; print_r($usersession);exit;
 $userlogin=array("reg_id"=>$usersession['userid']);
 $data['userr']=$this->home_model->userdetails("registeration",$userlogin);

  $userid=array("user_id"=>$usersession['userid']);
  $data['address']=$this->home_model->userdetails("user_address",$userid);
  //echo "<pre>"; print_r($data['address']);exit();
  $contact=array('section_id'=>1);
  $data['contact'] = $this->home_model->home("setting_table",$contact);
  $media=array('section_id'=>6);
  $data['media'] = $this->home_model->home("setting_table",$media);
  $condi = array('section_id' =>9); 
  $logo = array('sessting_id' =>4);
  $data['logo'] = $this->home_model->home("setting_table",$logo);
  $data['content'] = $this->home_model->home("setting_table",$condi);
  $fav = array('sessting_id' =>5);
  $data['fav'] = $this->home_model->home("setting_table",$fav);
  $data['brand']=$this->Product_Model->fsubproduct('products');
  $data['containt'] = "batteryworld/checkout.php";
  $this->load->view('front',$data);

}
public function address()
{
  $user=$this->session->userdata('client_details');
  $userid=array("reg_id"=>$user['userid']);
  $contact=array('section_id'=>1);
  $data['contact'] = $this->home_model->home("setting_table",$contact);
  $media=array('section_id'=>6);
  $data['media'] = $this->home_model->home("setting_table",$media);
  $condi = array('section_id' =>9); 
  $logo = array('sessting_id' =>4);
  $data['logo'] = $this->home_model->home("setting_table",$logo);
  $data['content'] = $this->home_model->home("setting_table",$condi);
  $fav = array('sessting_id' =>5);
  $data['fav'] = $this->home_model->home("setting_table",$fav);
  $data['brand']=$this->Product_Model->fsubproduct('products');
  $data['userr']=$this->home_model->userdetails("registeration",$userid);
  //echo "<pre>"; print_r($data['user']);exit;
  $data['containt'] = "batteryworld/address.php";
  $this->load->view('front',$data);

}
public function inserupdateaddress()
{
//echo "<pre>" ; print_r($_POST);exit();
$data=array("user_id"=>$_POST['userid'],
      "address"=>$_POST['address'],
      "country"=>$_POST['Country'],
      "state" =>$_POST['state'],
      "city"=>$_POST['city'],
      "zipcode"=>$_POST['zipcode']);
$fire=$this->home_model->insertaddress("user_address",$data);
if($fire)
{
  echo "Address Successfully Added";
  //print_r(json_encode($mess));exit;
}
else
{
  echo "Problem to Add Address";
  //print_r(json_encode($mess));exit;
}
 
}
public function insertaddress()
{
  //echo "<pre>" ; print_r($_POST);exit();
  $data=array("user_id"=>$_POST['userid'],
        "address"=>$_POST['address'],
        "city"=>$_POST['locality'],
        "zipcode"=>$_POST['pincode'],
        "default_address"=>$_POST['default_address']);
  $fire=$this->home_model->insertaddress("user_address",$data);
  if($fire)
  {
    $this->session->set_flashdata('success', 'Address Successfully Added.');
    redirect('userprofile/myaccount');
  }
  else
  {
     $this->session->set_flashdata('error', 'Problem to Add Address.');
     redirect('userprofile/myaccount');
  }
   
}
}






	