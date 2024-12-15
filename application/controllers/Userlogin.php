<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {

public function __construct()
{ 
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('Product_Model');
    //$this->laod->model("Location_Model");
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

	
	public function insercustomer()
	{
		//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{   
			  	$this->load->library('form_validation');
				$this->form_validation->set_rules('firstname', 'First Name', 'required');
				$this->form_validation->set_rules('lastname', 'Last Name', 'required');
				$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
				$this->form_validation->set_rules('email', 'User Email', 'required');
				$this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
				$this->form_validation->set_rules('zipcode', 'Zip Code', 'required'); 
				$this->form_validation->set_rules('address', 'Address', 'required');
				if ($this->form_validation->run() == FALSE)
					{
						
					 	$data['firstname'] = $_POST['firstname'];
					 	 $data['lastname'] = $_POST['lastname'];
					 	  	$data['email'] = $_POST['email'];
					 		  $data['dob'] = $_POST['dob'];
					 	   $data['mobile'] = $_POST['mobile'];
					 	   $data['contry'] = $_POST['contry'];
					 		$data['state'] = $_POST['state'];
					 		 $data['city'] = $_POST['city'];
					 	  $data['zipcode'] = $_POST['zipcode'];
					 	  $data['address'] = $_POST['address'];
					 	   $data['contry'] = $this->adminlogin->contry("contry");
							$data['state'] = $this->adminlogin->contry("state");
							 $data['city'] = $this->adminlogin->contry("city");
					
						 $data['containt'] = "admin/add_customer.php";
					$this->load->view('admin.php',$data);
					}
				else
					{

					    $feeddata=array("first_name" => $_POST['firstname'],"last_name"=>$_POST['lastname'],
											  "dob"  => $_POST['dob'],	   	   "email" =>$_POST['email'],
											"mobile" => $_POST['mobile'],   "mobilealt"=>$_POST['mobilealt'],
										 "countryid" => $_POST['contry'],	 "stateid" => $_POST['state'],
										 	  "city" => $_POST['city'],	     "zipcode" => $_POST['zipcode'],
										   "address" => $_POST['address']
										);
						$fire= $this->customer_modal->addcustomer("cutomar_details",$feeddata);
						if($fire)
						{
							redirect("Customer");
						}	
			}




	}
}


	

 



public function login()
{ //echo "yss";exit;
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
	//echo "yss";
	//echo "<pre>"; print_r($_POST);exit;
	$checkexist=array("mobile"=>$_GET['mobile_no']);
	$exist=$this->home_model->existnum("registeration",$checkexist);
	$otp = rand(1000,9999);
	$upd= array('otp' =>$otp);
	
	if(empty($exist))
	{
		$newuser=array("mobile"=>$_GET['mobile_no'],"otp"=>$otp);	
		$setotp=$this->home_model->newuser("registeration",$newuser);
		//
		if($setotp)
		{

		echo "Yes,Yes,".$otp;exit;
		}
	}
	else
	{	
	$condi=array("mobile"=>$_GET['mobile_no']);
	$setotp=$this->home_model->updateotp("registeration",$condi,$upd);
	echo "No,Yes,".$otp;exit;

	}

}
public function newuserdata()
{
	$checkotp=array("mobile"=>$_GET['mobile_no'],'otp'=>$_GET['otp']);
	$found_otp=$this->home_model->getotplogintime("registeration",$checkotp);
	if(empty($found_otp))
	{
		
		echo 0;exit;
  }
else
{
	$where=array("mobile"=>$_GET['mobile_no']);
	$newuserdetails=array("name"=>$_GET['name'],"email"=>$_GET['email'],"password"=>$_GET['password'],"otp"=>0);
	$updatnewuserdetails=$this->home_model->updateotp("registeration",$where,$newuserdetails);
	if($updatnewuserdetails)
	{
		$user_login_session=$this->home_model->login('registeration',$where);
		$user_session=array("userid"=>$user_login_session['reg_id'],
												"username"=>$user_login_session['name'],
												"email"=>$user_login_session['email'],
												"role"=>'cutomer'
											);
		 $this->session->set_userdata('client_details', $user_session);
		 $customersession=$this->session->userdata('client_details');
		//echo "<pre>"; print_r($customersession);exit;
		echo "yes";exit;
	}
}
}
public function verify()
{
	
	$where=array("password"=>$_GET['password'],"mobile"=>$_GET['mobile_no']);
	$updatnewuserdetails=$this->home_model->login("registeration",$where);
	//echo "<pre>"; print_r($updatnewuserdetails);exit;
	if($updatnewuserdetails)
	{
		$condi=array("mobile"=>$_GET['mobile_no']);
		$newuserdetails=array("otp"=>0);
	  $updatnewuserdetails=$this->home_model->updateotp("registeration",$condi,$newuserdetails);
		$user_login_session=$this->home_model->login('registeration',$where);
		$user_session=array("userid"=>$user_login_session['reg_id'],
												"username"=>$user_login_session['name'],
												"email"=>$user_login_session['email'],
												"role"=>'cutomer'
											);
		 $this->session->set_userdata('client_details', $user_session);
		 $customersession=$this->session->userdata('client_details');
		//echo "<pre>"; print_r($customersession);exit;
		echo "yes";exit;

			}
	
	else{
		  //$data['error']="2";
		 // print_r(json_encode($data));exit;
		echo "error";exit;
	}
}
/*public function login()
{
	//echo "<pre>"; print_r($_GET);exit;
	$condi=array("mobile"=>$_GET['otp'],"status"=>1);
	$user=$this->home_model->login("registeration",$condi);
	if($user)
	{
		
		$userdata = array(
          'mobile'           => $user['mobile'],
          'use_id'        => $user['reg_id'],
          "name"			=>$user['name']
        );
       
          print_r(json_encode($userdata));exit;
	}

}*/


public function cartt()
{
	//echo "<pre>"; print_r($_POST);exit;
	$this->load->library('cart');
	 $data = array();
        
        // Retrieve cart data from the session
    $insert_data = array(
                'id' => $this->input->post('item_id'),
                'name' => $this->input->post('pname'),
                'price' => $this->input->post('pprice'),
                'qty' => $this->input->post('pqty'),
                'pic' => $this->input->post('pic')
                
                );
    // This function add items into cart.
    $this->cart->insert($insert_data);
    $fefe = count($this->cart->contents());
    $data['cartt']=$this->cart->contents();
    $mm = array();
    $mm =$data;
    echo "<pre>";
    print_r($data);  
    print_r(json_encode($mm));
    exit;
}

public function itemdetails()
{
	$condi = array('item_id'=>$_GET['id']);
   	$data = $this->home_model->productdetails("item",$condi);
   	 print_r(json_encode($data));exit;
}

public function clientlist()
{
	$status = array("status"=>1);
	//$or = array("status"=>2);
    $data = $this->home_model->client("client",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}

public function place_order()
{
	//echo "<pre>";print_r($_POST);exit;
$data = array("customer_id" => $_POST['customer_id'],
		      "total_item" => $_POST['total_item'],
		      "grand_total"=> $_POST['grand_total'],
		      "place_date" => $_POST['place_date'],
		      "paid_method" => $_POST['paid_method'],
		      "razorpay_payment_id"=>$_POST['razorpay_payment_id'],
		      "addressid"=>$_POST['address']
		     );
$fire=$this->home_model->place_oreder("order_table",$data);
if($fire)
{
	//print_r($fire);
	 print_r(json_encode($fire));exit;
}

}
public function place_product()
{ //echo "<pre>"; print_r($_POST);exit;
  $data=array("prod_name"=>$_POST['prod_name'],
  			  "prod_qty"=>$_POST['prod_qty'],
  			  "fnorder_id"=>$_POST['fnorder_id'],
  			  "unit_price"=>$_POST['unit_price'],
  			  "total_price"=>$_POST['total_price'],
  			  "ord_date"=>$_POST['ord_date']
  			);
  $fire=$this->home_model->place_prod("products_order",$data);
if($fire)
{
	return $fire;
}
}
public function view_userprofile()
{
	$where=array("reg_id"=>$_GET['id']);
	$user=$this->home_model->userprofile("registeration",$where);
	print_r(json_encode($user));exit;

}
public function update_useaddress()
{
	$where=array("adr_id"=>$_GET['id']);
	$data['user']=$this->home_model->user_address("user_address",$where);
	$data['countryy']=$this->home_model->country("contry");
	$data['state']=$this->home_model->country("state");
	$data['cityy']=$this->home_model->country("city");

	print_r(json_encode($data));exit;

}
public function inserupdateaddress()
{
//echo "<pre>" ; print_r($_POST);exit();
$data=array("user_id"=>$_POST['userid'],
			"address"=>$_POST['address'],
			"country"=>$_POST['Country'],
			"state"	=>$_POST['state'],
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
public function updateaddress()
{  
	//echo "<pre>";print_r($_POST);exit();
$condi=array("adr_id"=>$_POST['addrid']);
$data=array("user_id"=>$_POST['userid'],
			"address"=>$_POST['address'],
			"country"=>$_POST['Country'],
			"state"	=>$_POST['state'],
			"city"=>$_POST['city'],
			"zipcode"=>$_POST['zipcode']);
$fire=$this->home_model->updaddress("user_address",$data,$condi);
if($fire){
	echo  "Address Successfully Updated";
	//print_r(json_encode($mess));exit;
}
else
{
	echo "Problem to Update Adddress";
}
 
}
public function inseriusername()
{
$condi=array("reg_id"=>$_POST['reg_id']);
$data=array("name"=>$_POST['name'],"email"=>$_POST['email']);
$fire=$this->home_model->upateusename("registeration",$data,$condi);
if($fire)
{   
	return $mess['error']= "Profile Successfully Updated";
	//print_r(json_encode($mess));exit;
}

else 
{
	return $mess['error']= "Problem to update Use Name";
	//print_r(json_encode($mess));exit;
}

}
public function getuserdetails()
{
	$condi=array("reg_id"=>$_GET['id']);
	$data['username']=$this->home_model->getusername("registeration",$condi);
	if($data['username'])
	{
		print_r(json_encode($data['username']));exit;
	}

}
public function alladdress()
{
	$condi=array("user_id"=>$_GET['id']);
	$data['address']=$this->home_model->address("user_address",$condi);
	if($data['address'])
	{
		print_r(json_encode($data['address']));exit;
	}

}
public function showotp()
{
	$data['otp']=$this->home_model->getotp("registeration");
	print_r(json_encode($data['otp']));exit;

}
public function getstate()
{
	$condi = array('contery_id' =>$_GET['id']);
	$data['state']=$this->home_model->state("state",$condi);
	print_r($data);exit();
}

public function userorder()
	{
		
               // $condi = array('item_status' => 10 );
                $orderid= array("customer_id"=>$_GET['id']);
               //	$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['order']=$this->home_model->orderhistory("order_table",$orderid);
				print_r(json_encode($data['order']));exit;
				
				
		
	}
	public function print_bill()
	{
		$condi = array('orderid' => $_GET['orderid'] );
		$data['order']=$this->home_model->orderbill("order_table",$condi);
		$orderid = array('fnorder_id' => $_GET['orderid'] );
		$data['product']=$this->home_model->orederdetails("products_order",$orderid);
		print_r(json_encode($data));exit;
	
	}

		public function order_detaills()
	{
        $condi = array('fnorder_id' => $_GET['orderid'] );
       	$data['orderdetails']=$this->home_model->orederdetails("products_order",$condi);
       	print_r(json_encode($data));exit;
		
			
	}
	public function getotplogintime()
	{
		$condi = array('mobile' =>$_GET['mobile']);
		$data['otp']=$this->home_model->getotplogintime("registeration",$condi);
		if($data['otp'])
		{
				print_r(json_encode($data));exit;	
		}
	}
	public function statechange()
	{
		$condi=array("contery_id"=>$_POST['country']);
		$data['product']=$this->home_model->jqsubproduct("state",$condi);
		$this->load->view("state",$data);
	}
	public function citychange()
	{
		$condi=array("stid"=>$_POST['state']);
		$data['product']=$this->home_model->jqsubproduct("city",$condi);
		$this->load->view("city",$data);

	}

	public function itemlistorderbyname()
{ 	//echo "ysd";exit;
 	$status = array("item_status"=>1,'root_cate'=>$_GET['id']);
    $data = $this->home_model->itemlistorderby("item",$status,$_GET['ord']);
    print_r(json_encode($data));exit;
}

public function contactme()
{
	 $maildate=date("y-m-d");
            $emaildata= array(
                                "inqury_name"    => $_POST['name'] ,
                                "inquery_email"  => $_POST['email'],
                                "subject" 		 => $_POST['subject'] ,
                                "message"        => $_POST['message'],
                                "inquery_date"   => $maildate
                            );
    if($fire=$this->customer_modal->stormaildetails("inquety",$emaildata))
    {
    	return true;
    }
}


}






	