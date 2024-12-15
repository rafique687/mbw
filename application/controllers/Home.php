<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

public function index() 
{ 	
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['title']="Mobile Battery World";
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi = array('section_id' =>9);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$data['brand']=$this->Product_Model->fsubproduct('products');
	$data['topbrand']=$this->Product_Model->topbrand('products');
	$banner=array('banner_section'=>'home');
	$data['banner']=$this->home_model->bannerr('banner',$banner);
    
	$data['range'] = $this->Product_Model->productrange("item");
	$data['lazy']=$this->Product_Model->lazyboxcate('item');
	//echo "<pre>"; print_r($data['range']);exit;
	$data['containt'] = "batteryworld/index.php"; 
	$this->load->view('front',$data);
}
	public function about()
	{ 
		$condi = array('sessting_id' =>$_GET['id']);
		$logo = array('sessting_id' =>4);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		
		$fav = array('sessting_id' =>5);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		$logo = array('sessting_id' =>$_GET['id']);
		$data['content'] = $this->home_model->home("setting_table",$logo);
		    // echo "<pre>";
			// echo  json_encode($data['content']);
			// echo "<pre>";
			// echo  json_encode($data['logo']);
			// echo "<pre>";
			// echo  json_encode($data['fav']);

			echo  json_encode($data);exit;
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


	public function composemail()
	{
		$data['email']=$_POST['rowSelectCheckBox'] ;
		//echo "<pre>"; print_r($data['email']);exit;
		$data['containt']="admin/compose.php";
		$this->load->view("admin",$data);
   }

   public function sendmail()
    {
	$sessiontrue=$this->session->userdata("user_name");
	if(!isset($sessiontrue))
	{
		redirect("dashboard/index");
	}
	else
	{ 
    //echo "<pre>"; print_r($_FILES);exit;
	$this->load->library('form_validation');
	$this->form_validation->set_rules('sendmail', 'Enter Receiver Email', 'required');
	$this->form_validation->set_rules('subject', 'Email Subject', 'required');
	$this->form_validation->set_rules('message', 'Message Body content', 'required');
	
	if ($this->form_validation->run() == FALSE)
	{

		$data['email']=explode(",",$_POST['sendmail']);
	 	$data['subject']=$_POST['subject'];
	 	$data['message']=$_POST['message'];
		$data['containt']="admin/compose.php";
		$this->load->view("admin",$data);
	}
	else
	{   
				
				if(isset($_FILES['attach']['name'][0]))
				{
					//echo "file";exit;
					$config['upload_path']          = './attachment/';
	                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
	                $config['max_size']             = 10000;
	                $config['max_width']            = 10000;
	                $config['max_height']           = 76800;
				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('attach'))
                {
                    $data['imgerror'] = array('error' => $this->upload->display_errors());
                    print_r($data['imgerror']);exit;
                    $data['containt']="admin/add_category.php";
                    $this->load->view("admin.php",$data);
                }
                else
                {
					
                		$this->load->library('phpmailer_lib');

						// PHPMailer object
						
		        		$mail = $this->phpmailer_lib->load();
                	   	$datta = $this->upload->data();
                	   	$attachmentapth=$datta['full_path'];
					     // SMTP configuration
						$mail->isSMTP();
						$mail->SMTPOptions = array(
							'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
							)
						);
				        $mail->Host     = 'ssl://smtp.gmail.com';
				        $mail->SMTPAuth = true;
				        $mail->Username = 'info.rafique687@gmail.com';
				        $mail->Password = 'rafique@123';
				        $mail->SMTPSecure = 'ssl';
				        $mail->Port     = 465;

				        $mail->setFrom('info.rafique687@gmail.com', 'kabir hasan');
				        $mail->addReplyTo('info.rafique687@gmail.com');

				        // Add a recipient
				        $reciver=explode(",",$_POST['sendmail']);
				        //echo "<pre>"; print_r($reciver);exit;
				        for($i=0;$i<count($reciver); $i++)
				        {
				        $mail->addAddress($reciver[$i]);
				       }
				       //$mail=$this->email->attach($attachmentapth);
				        // $mail->addAddress('pfdjksafj@gmail.com');
				       //$mail=$attachmentapth;
				        $mail->addAttachment($attachmentapth);
				        // Add cc or bcc 
				        $mail->addCC('khna.arbani@gmail.com');
				        //$mail->addBCC('info.rafique687@gmail.com');

				        // Email subject
				        $mail->Subject = $_POST['subject'];

				        // Set email format to HTML
				        $mail->isHTML(true);

				        // Email body content
				        $mailContent =$_POST['message'];
				        $mail->Body = $mailContent;

				        // Send email

				        //$mail->AddAttachment($_FILES['attach']['name']);
				        //echo "here"; exit;
				       // print_r($mail);exit;
				        if(!$mail->send()){
				            echo 'Message could not be sent.';
				            echo 'Mailer Error: ' . $mail->ErrorInfo;exit;
				        }else
				        {
				        	echo "fdjsakf";exit;
				        	$maildate=date("y-m-d");
				        	$emaildata= array("subject"  =>['subject'] ,
				        		"message" 	=> $_POST['message'],
				        	 "attachment"	=> $_FILE['attach']['name'],
				        	 	   "date" 	=> $maildate,
				        	"mailreceiver"	=> $_POST['sendmail']);
				        	if($fire=$this->customer_modal->stormaildetails("send_maildetails",$maildata))
				        	{
				        		redirect("cutomer/maillist?success=Mail Send Successfully");
				        	}

				           // redirect("customer?success=Mail Send Successfully");
				        }
				        }
		        }

				
				else
				{
					

		        $this->load->library('phpmailer_lib');

		        // PHPMailer object
		        $mail = $this->phpmailer_lib->load();

		        // SMTP configuration
				$mail->isSMTP();
				$mail->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);
		        $mail->Host     = 'ssl://smtp.gmail.com';
		        $mail->SMTPAuth = true;
		        $mail->Username = 'info.rafique687@gmail.com';
		        $mail->Password = 'rafique@123';
		        $mail->SMTPSecure = 'ssl';
		        $mail->Port     = 465;

		        $mail->setFrom('info.rafique687@gmail.com', 'kabir hasan');
		        $mail->addReplyTo('info.rafique687@gmail.com');

		        // Add a recipient
		        $reciver=explode(",",$_POST['sendmail']);
		        //echo "<pre>"; print_r($reciver);exit;
		        for($i=0;$i<count($reciver); $i++)
		        {
		        $mail->addAddress($reciver[$i]);
		       }
		        // $mail->addAddress('pfdjksafj@gmail.com');

		        // Add cc or bcc 
		        $mail->addCC('info.rafique687@gmail.com');
		        //$mail->addBCC('info.rafique687@gmail.com');

		        // Email subject
		        $mail->Subject = $_POST['subject'];

		        // Set email format to HTML
		        $mail->isHTML(true);

		        // Email body content
		        $mailContent =$_POST['message'];
		        $mail->Body = $mailContent;

		        // Send email

		        //$mail->AddAttachment($_FILES['attach']['name']);
		        //echo "here"; exit;
		        //print_r($mail);exit;
		        if(!$mail->send()){
		            echo 'Message could not be sent.';
		            echo 'Mailer Error: ' . $mail->ErrorInfo;exit;
		        }else{
		           		$maildate=date("y-m-d");
			        	$emaildata= array("subject"  =>['subject'] ,
			        		"message" 		=> $_POST['message'],
			        		"date" 			=> $maildate,
			        		"mailreceiver"  => $_POST['sendmail']);
			        	if($fire=$this->customer_modal->stormaildetails("send_maildetails",$maildata))
			        	{
			        		redirect("cutomer/maillist?success=Mail Send Successfully");
			        	}
		        }
		    }
		}
	}
}

public function maillist()
{
	$data['mailsent']=$this->customer_modal->maillist("send_maildetails");
	$data['containt']="admin/maillist.php";
	$this->load->view("admin",$data);

}

public function allthismailreceicer()
{

	$condi=array("mail_id"=>$_GET['id']);
	$data['allreceiver']=$this->customer_modal->allthismailreceicer("send_maildetails",$condi);
	//echo '<pre>'; print_r($data['allreceiver']);exit;
	$data['containt']="admin/allmailreceiver.php";
	$this->load->view("admin",$data);
}
			


public function deletecustomer()
{
	//echo "<pre>"; print_r($_GET);exit;
	$condi=array("cust_id"=>$_GET['id']);
	$fire=$this->customer_modal->delcustomer("cutomar_details",$condi);
	if($fire)
	{
		redirect("customer");
	}
}


public function editcutomer()
{
	$condi=array("cust_id"=>$_GET['id']);
	$data['editid']=$_GET['id'];
	$data['contry'] = $this->adminlogin->contry("contry");
	$data['state'] = $this->adminlogin->contry("state");
	$data['city'] = $this->adminlogin->contry("city");
	$data['customer'] = $this->customer_modal->customerdetails("cutomar_details",$_GET['id']);
	//echo "<pre>"; print_r($data['customer']);exit;	
	$data['containt']="admin/editcustomer.php";
	$this->load->view("admin",$data);					
}

public function updatecustomer()
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
					
						 $data['containt'] = "admin/editcustomer.php";
					$this->load->view('admin.php',$data);
					}
				else
					{
						$condi= array('cust_id' => $_POST['cust_id'] );
					    $feeddata=array("first_name" => $_POST['firstname'],"last_name"=>$_POST['lastname'],
											  "dob"  => $_POST['dob'],	   	   "email" =>$_POST['email'],
											"mobile" => $_POST['mobile'],   "mobilealt"=>$_POST['mobilealt'],
										 "countryid" => $_POST['contry'],	 "stateid" => $_POST['state'],
										 	  "city" => $_POST['city'],	     "zipcode" => $_POST['zipcode'],
										   "address" => $_POST['address']
										);
						$fire= $this->customer_modal->updatecustomer("cutomar_details",$feeddata,$condi);
						if($fire)
						{
							redirect("Customer");
						}	
			}

	}
}

public function inquery()
{ //echo "<pre>"; print_r($_POST);exit;
   $this->load->library('phpmailer_lib');
    // PHPMailer object
    $mail = $this->phpmailer_lib->load();
    // SMTP configuration
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host     = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info.rafique687@gmail.com';
    $mail->Password = 'rafique@123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom('info.rafique687@gmail.com', 'kabir hasan');
    $mail->addReplyTo('info.rafique687@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->addCC('info.rafique687@gmail.com');
    
    $mail->Subject = $_POST['subject'];
    // Set email format to HTML
    $mail->isHTML(true);
    // Email body content
    $mailContent ="EMail:".$_POST['email']."</br>".$_POST['message'];
    $mail->Body=$_POST['message'];
     if(!$mail->send()){
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;exit;
    }
    else{  

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
               redirect("../contact.php?success=Your Enquery Submit Successfully,We Will contact you very soon");
            } 
    }
    }

public function basic()
{ 
	$basic = array('section_id' =>1);
	$or = array('section_id' =>6);
    $data['basic'] = $this->home_model->home("setting_table",$basic);
    $data['footer'] = $this->home_model->home("setting_table",$or);
    $data['baseurl']=base_url();
    print_r(json_encode($data));exit;
}

public function home()
{ 	
 	$page = array("section_id"=>$_GET['id']);
    $data = $this->home_model->home("setting_table",$page);
    
    print_r(json_encode($data));exit;
}
public function services()
{ 	//echo "ysd";exit;
 	$status = array("service_status"=>1);
    $data = $this->home_model->services("services",$status);
    print_r(json_encode($data));exit;
}
public function product()
{   //echo "yes";exit;
	$status = array("item_status"=>1);	
	//$or = array("status"=>2);
    $data = $this->home_model->product("item",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}
public function event()
{
	$status = array("status"=>1);
	//$or = array("status"=>2);
    $data = $this->home_model->product("event",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}

public function aboutt()
{ 	
 	$page = array("section_id"=>$_GET['id']);
    $data['about'] = $this->home_model->home("setting_table",$page);
    if($_GET['id']==2)
    {
    $condi = array("bannerstatus"=>1,"banner_section"=>'about');
	}
	elseif($_GET['id']==3)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'temsncondition');
	}
	elseif($_GET['id']==4)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'privacy');
	}
	elseif($_GET['id']==5)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'service');
	}
	elseif($_GET['id']==8)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'faq');
	}
    $data['banner'] = $this->home_model->bannerr("banner",$condi);
    
    print_r(json_encode($data));exit;
}
public function banner()
{
	$condi = array("bannerstatus"=>1,"banner_section"=>'home');
    $data = $this->home_model->bannerr("banner",$condi);
   // print_r($data);exit;
    
    print_r(json_encode($data));exit;

}

public function privacy()
{  
	$basic = array('section_id' =>$_GET['id']);
    $data = $this->home_model->home("setting_table",$basic);
    print_r(json_encode($data));exit;

}
public function category()
{ 	//echo "ysd";exit;
 	$status = array("status"=>1,"parent_id"=>0);
    $data = $this->home_model->services("products",$status);
    print_r(json_encode($data));exit;
}
public function subcategory()
{ 	//echo "ysd";exit;
 	$status = array("status"=>1);
    $data = $this->home_model->subcategory("products",$status);
    print_r(json_encode($data));exit;
}

public function vegetable()
{ 	//echo "ysd";exit;
 	$status = array("status"=>1,'main_cate'=>$_GET['id']);
    $data = $this->home_model->subcategory("products",$status);
    print_r(json_encode($data));exit;
}
public function productdetails()
{
	if($_GET['table']=='item')
	{
		$condi = array('item_id'=>$_GET['id']);
   		$data = $this->home_model->productdetails("item",$condi);
   		

	}
	else
	{
		$condi = array('prod_id'=>$_GET['id']);
   		$data = $this->home_model->productdetails("products",$condi);

	}
	
    print_r(json_encode($data));exit;

}

public function relatedproduct()
{
	$status = array("item_status"=>1,"root_cate"=>$_GET['id']);	
	$data = $this->home_model->product("item",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;
}
public function offer()
{
	$status = array("item_status"=>1,"offer"=>"yes");	
	$data = $this->home_model->product("item",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}
public function category_name()
{
	//echo "dd";exit;
 $condi=array("prod_id"=>$_GET['id']);
 $data['catname']=$this->home_model->catename("products",$condi);
 $data['url']=base_url();
 print_r(json_encode($data));exit;

}
public function itemlist()
{ 	//echo "ysd";exit;
 	$status = array("item_status"=>1,'sub_cate'=>$_GET['id']);
    $data = $this->home_model->itemlist("item",$status);
    print_r(json_encode($data));exit;
}
public function itemlistsearch()
{ 	//echo "ysd";exit;
 	$status = array("item_status"=>1);
    $data = $this->home_model->itemlistsearch("item",$status,$_GET['search']);
    //echo "<pre>"; print_r($data);exit();
    print_r(json_encode($data));exit;
}
public function allitem()
{ 	//echo "ysd";exit;
 	$status = array("item_status"=>1,'root_cate'=>$_GET['id']);
    $data = $this->home_model->itemlist("item",$status);
    print_r(json_encode($data));exit;
}
public function registration()
{		
//echo "<pre>"; print_r($_POST);exit();	
	$checkexist=array("mobile"=>$_POST['mobile']);
	$exist=$this->home_model->existnum("registeration",$checkexist);
	if($exist)
	{
		echo "This Number Already Exist";
	}
	else
	{

			$otp=rand(1000,10000);
			//echo $otp;exit();
			$regarray = array('mobile'=> $_POST['mobile'],
							  'otp'	  => $otp
						);
			$fire=$this->home_model->registre("registeration",$regarray);
			if($fire)
			{
				//send $otp to user
				 //redirect("../otp.php");exit;
				echo "1";
			}
	}
}
public function newletter()
{		
//echo "<pre>"; print_r($_POST);exit();	
	$checkexist=array("mail"=>$_POST['maill']);
	$exist=$this->home_model->existnum("newsletter",$checkexist);
	if($exist)
	{
		echo "This Email Already Exist";
	}
	else
	{
			$joindate=date("yy-m-d");
			$regarray = array('mail'=> $_POST['maill'],'sucrib_date'=>$joindate);
			$fire=$this->home_model->news("newsletter",$regarray);
			if($fire)
			{
				echo "Thank For Subscribe Us";
			}
	}
}

public function login()
{
	$checkexist=array("mobile"=>$_POST['mobile']);
	$exist=$this->home_model->existnum("registeration",$checkexist);
	if(empty($exist))
	{
		echo "Number Not Exist";
	}
	else
	{	
	$otp = rand(1000,9999);
	$upd= array('otp' =>$otp);
	$upd= array('otp' =>$otp);
	$condi=array("mobile"=>$_POST['mobile']);
	$setotp=$this->home_model->updateotp("registeration",$condi,$upd);
	if($setotp)
	{
		echo "1";
		/*
		$userdata = array(
          'mobile'           => $user['mobile'],
          'use_id'        => $user['reg_id'],
          "name"			=>$user['name']
        );
       
          print_r(json_encode($userdata));exit;*/
	}
	}

}
public function verify()
{
	$condi = array('otp' =>$_POST['otp']);
	$data= array('status' =>1 ,'otp'=>'0' );
	$rowidd=$this->home_model->rowid("registeration",$condi);
	if($rowidd)
	{ 
		//echo "<pre>"; print_r($rowidd);exit;
		$firre=$this->home_model->otpverify("registeration",$condi,$data);
		if($firre==TRUE)
			{   
				
				 print_r(json_encode($rowidd));exit;

			}
	}
	else{
		  $data['error']="2";
		  print_r(json_encode($data));exit;
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
        $condii = array('fnorder_id' => $_GET['orderid'] );
        $orderid=array("orderid"=>$_GET['orderid']);
       	$data['orderdetails']=$this->home_model->orederdetails("products_order",$condii);
       	$data['orderplacedetails']=$this->home_model->orderbill("order_table",$orderid);
       	//echo "<pre>"; print_r($data['orderplacedetails']);exit;
       
    $contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['title']="Mobile Battery World";
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi = array('section_id' =>9);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$data['brand']=$this->Product_Model->fsubproduct('products');
	$data['topbrand']=$this->Product_Model->topbrand('products');
	$banner=array('banner_section'=>'home');
	$data['banner']=$this->home_model->bannerr('banner',$banner);
    
	$data['range'] = $this->Product_Model->productrange("item");
	//echo "<pre>"; print_r($data['range']);exit;
	$data['containt'] = "batteryworld/order-info.php"; 
	$this->load->view('front',$data);
		
			
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






	