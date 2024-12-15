<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->model('Location_Model');
        $this->load->model('adminlogin');
        $this->load->library('form_validation');

      
    }

	public function index()
	{  

		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$or=array("country_status"=>2);
			$condi=array("country_status"=>1);
			$data['country']=$this->Location_Model->Allcountry("contry",$condi,$or);
			//echo "<pre>";print_r($data['country']);exit();
			$data['containt']='admin/country.php';
			$this->load->view('admin.php',$data);
		}
	}

	public function addcategory()
	{  
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				
					$data['all']=$this->adminlogin->allsetting("setting_table");	
					/*$data['catename']=$this->Product_Model->getcatename("products",$condi);*/
					//$data['all']=$this->adminlogin->allsetting("setting_table");
				    $data['containt']="admin/add_country.php";
					$this->load->view('admin.php',$data);
			}
	}

	public function addstate()
	{  
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				
					$data['all']=$this->adminlogin->allsetting("setting_table");	
					$or=array("country_status"=>2);
					$condi=array("country_status"=>1);
					$data['country']=$this->Location_Model->Allcountry("contry",$condi,$or);
				    $data['containt']="admin/add_state.php";
					$this->load->view('admin.php',$data);
			}
	}

		public function addcity()
	{  
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				
					$data['all']=$this->adminlogin->allsetting("setting_table");	
					$or=array("country_status"=>2);
					$condi=array("country_status"=>1);
					$data['country']=$this->Location_Model->Allcountry("contry",$condi,$or);
				    $data['containt']="admin/add_city.php";
					$this->load->view('admin.php',$data);
			}
	}


	

	public function add_maiandsubcate()
	{	
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else{
			//echo "<pre>"; print_r($_POST);exit();
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'country Name', 'required');
				
				if ($this->form_validation->run() == FALSE)
					{
						$data['product_name']=$_POST['product_name'];
						$data['containt']="admin/add_country.php";
						$this->load->view("admin",$data);
					}
					else
					{  
						$datta = array(
										'contry'		 => $_POST['product_name'],
										"country_status" => $_POST['status']
									   );
						$qry = $this->Location_Model->productinsert("contry",$datta);
							if($qry)
								{
								redirect("Location/index?sucess=country Successfully Added");
								}
					}
			}
		}
		public function insertstate()
	{	
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else{
			//echo "<pre>"; print_r($_POST);exit();
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'country Name', 'required');
				
				if ($this->form_validation->run() == FALSE)
					{
						$data['product_name']=$_POST['product_name'];
						$data['containt']="admin/add_state.php";
						$this->load->view("admin",$data);
					}
					else
					{  
						$datta = array(
										'contery_id'		 => $_POST['cntid'],
										'state'		 => $_POST['product_name'],
										"state_status" => $_POST['status']
									   );
						$qry = $this->Location_Model->productinsert("state",$datta);
							if($qry)
								{
								redirect("Location/viewcategory?sucess=State Successfully Added&category=".$_POST['cntid']);
								}
					}
			}
		}

			public function insetcity()
	{	
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else{
			//echo "<pre>"; print_r($_POST);exit();
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('cntid', 'country Name', 'required');
				$this->form_validation->set_rules('state', 'state Name', 'required');
				$this->form_validation->set_rules('city', 'city Name', 'required');
				
				if ($this->form_validation->run() == FALSE)
					{
						$data['cntid']=$_POST['cntid'];
						$data['state']=$_POST['state'];
						$data['city']=$_POST['city'];
						$or=array("country_status"=>2);
						$condi=array("country_status"=>1);
						$data['country']=$this->Location_Model->Allcountry("contry",$condi,$or);
						$data['containt']="admin/add_city.php";
						$this->load->view("admin",$data);
					}
					else
					{  
						$datta = array(
										'cntid'		 => $_POST['cntid'],
										'stid'		 => $_POST['state'],
										"cityname" 	 => $_POST['city'],
										"city_status"=> $_POST['status']
									   );
						$qry = $this->Location_Model->productinsert("city",$datta);
							if($qry)
								{
								redirect("Location/city?sucess=City Successfully Added&category=".$_POST['state']);
								}
					}
			}
		}

	public function insertproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{     $data['all']=$this->adminlogin->allsetting("setting_table");	

      			$config['upload_path']          = './products/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1000;
                $config['max_height']           = 7680;
				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('productpic'))
                {
                    $data['imgerror'] = array('error' => $this->upload->display_errors());
                    $data['containt']="admin/add_category.php";
                    $this->load->view("admin.php",$data);
                }
                else
                {   $data['all']=$this->adminlogin->allsetting("setting_table");	
                	$datta = array('product_name' => $_POST['product_name'],
                					'product_pic' => $_FILES['productpic']['name'],
                					 "parent_id"  =>$_POST['p_cate'],
                					    "status"  =>$_POST['stockstatus'] );
                	$qry = $this->Product_Model->productinsert("products",$datta);
	                  if($qry)
	                    {
	                    $data['success']="Category Successfuly Inserted";
	                	$data['containt']="admin/add_category.php";
                        $this->load->view("admin.php",$data);
	                    }
                }
        }
	}

	public function viewcategory()
	{ 
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  	
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$cateid=array("contryid"=>$_GET['category']);
			$data['cntname']=$this->Location_Model->getcatename("contry",$cateid);
			$id=$_GET['category'];
			$or=array("state_status"=>2);
			$condi = array('contery_id' => $id,'state_status'=>1);
			$data['state']=$this->Location_Model->Allcountry("state",$condi,$or);
			$data['containt']='admin/state.php';
			$this->load->view("admin",$data);
		}
	}
	public function city()
	{ 
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  	
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$cateid=array("stateid"=>$_GET['category']);
			$data['statename']=$this->Location_Model->getstatename("state",$cateid);
			$id=$_GET['category'];
			$or=array("city_status"=>2);
			$condi = array('stid'=> $id,'city_status'=>1);
			$data['city']=$this->Location_Model->Allcountry("city",$condi,$or);
			//echo "<pre>";print_r($data);exit();
			$data['containt']='admin/city.php';
			$this->load->view("admin",$data);
		}
	}
	public function deletecity()
	{
		$condi=array('ctid'=>$_GET['id']);
		$fire=$this->Location_Model->delcity("city",$condi);
		if($fire)
		{
			redirect("Location/city?success=City Successfully deleted&category=".$_GET['sid']);
		}
	}

	public function subaddproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{
			$data['all']=$this->adminlogin->allsetting("setting_table");	
			$data['containt']="admin/add_subcategory.php";
			$data['parent_cate']=$this->Product_Model->mainproduct("products");
			$this->load->view('admin.php',$data);
		}
	}

	public function subaddproductinsert()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{   $data['all']=$this->adminlogin->allsetting("setting_table");	
			$pic= count($_FILES['productpic']['name']);
			$userpic='';
			for($i = 0; $i < $pic; $i++)
				{
						$userpic= $_FILES['userfile']['name']= $_FILES['productpic']['name'][$i];
						$_FILES['userfile']['type']= $_FILES['productpic']['type'][$i];
						$_FILES['userfile']['tmp_name']= $_FILES['productpic']['tmp_name'][$i];
						$_FILES['userfile']['error']= $_FILES['productpic']['error'][$i];
						$_FILES['userfile']['size']= $_FILES['productpic']['size'][$i];    
						$uploadPath = './subproducts/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('userfile'))
						{
						print_r($this->upload->display_errors());
						}
				}
			
		$imploadpicname=implode(",",$_FILES['productpic']['name']);
		$datta = array('product_name' =>$_POST['product_name'],"parent_id"=>$_POST['p_cate'],"status"=>$_POST['stockstatus'],'product_pic'=>$imploadpicname,);
		$qry = $this->Product_Model->productinsert("products",$datta);
		if($qry)
			{
				redirect("product/subaddproduct");
			}
		}
	}
			
	public function view_subcategory()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
		{   $data['all']=$this->adminlogin->allsetting("setting_table");	
			$data['product']=$this->Product_Model->subproduct("products");
			//echo "<pre>"; print_r($data['product']);exit;
			$data['containt']='admin/view_subproduct.php';
			$this->load->view("admin",$data);
		}
	}


	public function addproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['containt']="admin/add_item.php";
				$data['parent_cate']=$this->Product_Model->mainproduct("products");
				$this->load->view('admin.php',$data);
			}
	}

	public function jquerysubcate()
	{
		$condi=array("contery_id"=>$_GET['id']);
		$data['product']=$this->Location_Model->jqsubproduct("state",$condi);
		$this->load->view("state",$data);
	}

	public function jquerystate()
	{
		$condi=array("prod_id "=>$_GET['id']);
		
		$data['product']=$this->Location_Model->jqsubproduct("state",$condi);
		$this->load->view("state",$data);
	}
	
	//*****************udate product status***********************
	public function category_status()
	{   
		$idexp=explode(",",$_GET['id']);
		
		$condi=array("prod_id "=>$idexp[0]);
		if($idexp[1]==2)
		{
			 $upd=array("status"=>1);
		}
		else
		{
			$upd=array("status"=>2);
		}
		//$upd=array("status"=>2);
		$data['product']=$this->Product_Model->statusupdate("products",$condi,$upd);
		return true;
	}
	//************************************************************
	public function jquerycity()
	{
		$condi=array("stid"=>$_GET['id']);
		$data['product']=$this->Product_Model->jqsubproduct("city",$condi);
		$this->load->view("city",$data);
	}

	public function iteninsert()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{   $data['all']=$this->adminlogin->allsetting("setting_table");	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				$this->form_validation->set_rules('des', 'Product Description', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$data['product_name']=$_POST['product_name'];
					$data['product_name']=$_POST['des'];
					$data['parent_cate']=$this->Product_Model->mainproduct("products");
					$data['containt']="admin/add_item.php";
					$this->load->view("admin",$data);
				}
				else
				{
				$pic= count($_FILES['productpic']['name']);
				$userpic='';
				for($i = 0; $i < $pic; $i++)
				{
					$userpic= $_FILES['userfile']['name']= $_FILES['productpic']['name'][$i];
					$_FILES['userfile']['type']= $_FILES['productpic']['type'][$i];
					$_FILES['userfile']['tmp_name']= $_FILES['productpic']['tmp_name'][$i];
					$_FILES['userfile']['error']= $_FILES['productpic']['error'][$i];
					$_FILES['userfile']['size']= $_FILES['productpic']['size'][$i];    
					$uploadPath = './item/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					// Load and initialize upload library
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('userfile'))
						{
							$data['error']=$this->upload->display_errors();
							$data['containt']="admin/add_item.php";
							$data['parent_cate']=$this->Product_Model->mainproduct("products");
							$this->load->view('admin.php',$data);
						}
				}
					
					$imploadpicname=implode(",",$_FILES['productpic']['name']);
						$datta = array('item_name' => $_POST['product_name'],
										"root_cate"=> $_POST['p_cate'],
										"item_status"=>$_POST['stockstatus'],
										'item_pic'   =>$imploadpicname,
										"description"=>$_POST['des']);
						$qry = $this->Product_Model->productinsert("item",$datta);
					if($qry)
						{
							
							redirect("product/view_product?sucess=Product Successfully Stored");
						}
			}
		}
	}

	public function view_product()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['product']=$this->Product_Model->viewitem("item");
				$data['containt']='admin/view_item.php';
				$this->load->view("admin",$data);
			}
	}

	//***********Delet Product****************************************
	public function deleteproduct()
	{ 
		///echo "<pre>"; print_r($_GET);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{   $data['all']=$this->adminlogin->allsetting("setting_table");	
				$condi=array("contryid"=>$_GET['id']);
				$upd=array('country_status' =>0);
				$del=$this->Location_Model->deleteProduct('contry',$condi,$upd);
				redirect("Location/index?success=".$_GET['category'].'&sucess=country Successfully Delete');
			}
	}

	public function deletesubcate()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
			else
			{
			$condi=array("prod_id"=>$_GET['id']);
			$upd=array('status' =>0);
			$del=$this->Product_Model->deleteProduct('products',$condi,$upd);
			redirect("product/viewcategory/?id=0");
			}
	}
							
	public function editcategory()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$condi=array("contryid"=>$_GET['id']);
				$data['editid']=$_GET['id'];
				$data['containt']="admin/edit_country.php";
				$data['product']=$this->Location_Model->getimage('contry',$condi);
				$this->load->view("admin",$data);
			}
	}
	public function editstate()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$where=array("stateid "=>$_GET['id']);
				$data['editid']=$_GET['id'];
				$or=array("country_status"=>2);
				$condi=array("country_status"=>1);
				$data['country']=$this->Location_Model->Allcountry("contry",$condi,$or);
				$data['state']=$this->Location_Model->getstate("state",$where);
				//echo "<pre>"; print_r($data);exit();
				$data['containt']="admin/edit_state.php";
				
				$this->load->view("admin",$data);
			}
	}

	public function edit_insert()
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
				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				if ($this->form_validation->run() == FALSE)
			{
				$condi=array("prod_id"=>$_POST['gett']);
				$data['editid']=$_POST['gett'];
				$data['containt']="admin/edit_country.php";
				$this->load->view("admin",$data);
			}
			else
			{		
					$condi=array("contryid "		=>$_POST['gett']);
					$field=array(
								"contry" => $_POST['product_name'],
								"country_status"=> $_POST['status']
								);
					$fire=$this->Location_Model->editinsert("contry",$field,$condi);
					if($fire)
					{
					 redirect("Location/index?success=Update Successfull");
			}
					}
		}
	}

	public function stateupdate()
	{  //echo "<pre>"; print_r($_POST);exit();
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				if ($this->form_validation->run() == FALSE)
			{
				$condi=array("prod_id"=>$_POST['gett']);
				$data['editid']=$_POST['gett'];
				$data['containt']="admin/edit_country.php";
				$this->load->view("admin",$data);
			}
			else
			{		
					$condi=array("stateid"		=>$_POST['gett']);
					$field=array(
								"state" => $_POST['product_name'],
								"state_status"=> $_POST['status'],
								"contery_id"=>$_POST['cntid']
								);
					$fire=$this->Location_Model->editinsert("state",$field,$condi);
					if($fire)
					{
					 redirect("Location/viewcategory?success=State update Successfully&category=".$_POST['cntid']);
			}
					}
		}

	}
					

	//*************************Delete sub project ***********************************
	public function deletesubproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$this->load->helper("url");
				if($_GET['id'])
				{
					$condi=array("prod_id"=>$_GET['id']);
					$getpic=$this->Product_Model->getimage('products',$condi);
					if($getpic)
						{
							$pic_array=explode(",",$getpic['product_pic']);
							$no_Of_pic=count($pic_array);
							for($i=0;$i<$no_Of_pic;$i++)
							{
								delete_files("products/".$pic_array[$i]);
								$path = base_url().'/products/'.$pic_array[$i];
								@unlink($path);
							}
								$del=$this->Product_Model->deleteProduct('products',$condi);
						}
				}
					redirect("product/view_subproduct");
			}
	}

//*****************edit subProduct*************************************

	public function editsubproduct()
	{

		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$condi=array("prod_id"=>$_GET['id']);
				$check=array("parent_id"=>0);
				$data['editid']=$_GET['id'];
				$data['containt']="admin/edit_subcategory.php";
				$data['product']=$this->Product_Model->getimage('products',$condi);
				$data['p_cate']=$this->Product_Model->mainproduct('products');
				$this->load->view("admin",$data);
			}

	}

//****************Edit inser sub category************************

//***************Insert edit product**********************************
public function edit_insertsubcategory()
	{

		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
		{
			if($_FILES['productpic']['name'][0])
				{  
					$pic= count($_FILES['productpic']);
					$userpic='';
					for($i = 0; $i < $pic; $i++)
					{
						$userpic= $_FILES['userfile']['name']= $_FILES['productpic']['name'][$i];
						$_FILES['userfile']['type']= $_FILES['productpic']['type'][$i];
						$_FILES['userfile']['tmp_name']= $_FILES['productpic']['tmp_name'][$i];
						$_FILES['userfile']['error']= $_FILES['productpic']['error'][$i];
						$_FILES['userfile']['size']= $_FILES['productpic']['size'][$i];    
						$uploadPath = './subproducts/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						// Load and initialize upload library
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('userfile'))
							{
								print_r($this->upload->display_errors());
								$data['imgerror'] = array('error' => $this->upload->display_errors());
								$data['containt']="admin/edit_subcategory.php";
								//echo "<pre>"; print_r($data['error']);
								$this->load->view("admin.php",$data);
							}
							else
							{
								$condi=array("prod_id"      => $_POST['gett']);
								$field=array("product_name" => $_POST['product_name'],
												"product_pic"  => $pushpic,
												"parent_id"	=> $_POST['p_cate'],
												"description"  => $_POST['des'],
												"status"		=> $_POST['stockstatus']);
								$fire=$this->Product_Model->editinsert("products",$field,$condi);
									if($fire)
									{
										redirect("product/view_subproduct");
									}

							}
					}
				}
	//|*************************************************************
			else
			{
				$condi=array("prod_id"=>$_POST['gett']);
				$field=array("product_name" => $_POST['product_name'],
								"parent_id"	=> $_POST['p_cate'],
								"product_pic"  => $_POST['oldpic'],
								"description"  => $_POST['des'],
								"status"		=> $_POST['stockstatus']);
				$fire=$this->Product_Model->editinsert("products",$field,$condi);
				if($fire)
				{
					redirect("product/view_subproduct");
				}
			}
		}
	}

	//************************Edit item*******************************
	public function edititem()
		{
			$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
				{
				redirect("dashboard/index");
				}
			else
				{
				$condi=array("item_id"=>$_GET['id']);
				$data['editid']=$_GET['id'];
				$data['containt']="admin/edit_item.php";
				$data['product']=$this->Product_Model->itemrow('item',$condi);
				//echo "<pre>"; print_r($data['product']);exit;
				$data['p_cate']=$this->Product_Model->mainproduct('products');
				$data['subcate']=$this->Product_Model->subproduct('products');
				$this->load->view("admin",$data);
				}
		}

		public function inser_edititem()
		{
			$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
				{
				redirect("dashboard/index");
				}
			else
			{
				//**************************************************************
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				$this->form_validation->set_rules('des', 'Product Description', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$condi=array("item_id"=>$_POST['gett']);
					$data['product']=$this->Product_Model->itemrow('item',$condi);
					//echo "<pre>"; print_r($data['product']);exit;
					$data['p_cate']=$this->Product_Model->mainproduct('products');
					$data['subcate']=$this->Product_Model->subproduct('products');
					$data['editid']=$_POST['gett'];
					$data['parent_cate']=$this->Product_Model->mainproduct("products");
					$data['containt']="admin/edit_item.php";
					$this->load->view("admin",$data);
				}
				else
				{
					$data['product_name']=$_POST['product_name'];
					$data['product_name']=$_POST['des'];
					$data['p_cate']=$_POST['p_cate'];
					$data['stockstatus']=$_POST['stockstatus'];
						
						if(isset($_FILES['productpic']['name'][0]))
						{  
							$pic= count($_FILES['productpic']['name']);
							$userpic='';
							for($i = 0; $i<$pic; $i++)
							{
								$userpic= $_FILES['userfile']['name']= $_FILES['productpic']['name'][$i];
								$_FILES['userfile']['type']= $_FILES['productpic']['type'][$i];
								$_FILES['userfile']['tmp_name']= $_FILES['productpic']['tmp_name'][$i];
								$_FILES['userfile']['error']= $_FILES['productpic']['error'][$i];
								$_FILES['userfile']['size']= $_FILES['productpic']['size'][$i];    
								$uploadPath = './item/';
								$config['upload_path'] = $uploadPath;
								$config['allowed_types'] = 'jpg|jpeg|png|gif';
								$this->load->library('upload', $config);
								$this->upload->initialize($config);
								if(!$this->upload->do_upload('userfile'))
									{
										print_r($this->upload->display_errors());exit;
									}
							}
										
										$imploadpicname=implode(",",$_FILES['productpic']['name']);
										$pushpic=$imploadpicname.$_POST['oldpic'];
										$condi=array("item_id"      => $_POST['gett']);
										$field=array("item_name" => $_POST['product_name'],
														"item_pic"  => $pushpic,
														"root_cate"	=> $_POST['p_cate'],
														"description"  => $_POST['des'],
														"item_status"		=> $_POST['stockstatus']);
										$fire=$this->Product_Model->editinsert("item",$field,$condi);
											if($fire)
											{
												redirect("product/view_item");
											}
							}
//|*************************************************************
							else
							{
								$condi=array("item_id"=>$_POST['gett']);
								$field=array("item_name" => $_POST['product_name'],
												"root_cate"	=> $_POST['p_cate'],
												"item_pic"  => $_POST['oldpic'],
												"description"  => $_POST['des'],
												"item_status"		=> $_POST['stockstatus']);
								$fire=$this->Product_Model->editinsert("item",$field,$condi);
								if($fire)
								{
									redirect("product/view_item");
								}
							}
					}
				}
	}

public function deleteitem()
{ 
	$sessiontrue=$this->session->userdata("user_name");
	if(!isset($sessiontrue))
		{
		redirect("dashboard/index");
		}
		else
		{
			$this->load->helper("url");

			if($_GET['id'])
			{
				$condi=array("item_id"=>$_GET['id']);
				$getpic=$this->Product_Model->getimage('item',$condi);
				if($getpic)
					{
						$pic_array=explode(",",$getpic['item_pic']);
						$no_Of_pic=count($pic_array);
							for($i=0;$i<$no_Of_pic;$i++)
							{
								delete_files("item/".$pic_array[$i]);
								$path = base_url().'/item/'.$pic_array[$i];
								@unlink($path);
							}
						$del=$this->Product_Model->deleteProduct('item',$condi);
					}
			}
				redirect("product/view_item");
		}
}

public function delimage()
{
  
	$condi=array("prod_id"=>$_POST['cateid']);
				$getpic=$this->Product_Model->getimage('products',$condi);
				//echo '<pre>'; print_r($getpic);exit;
				if($getpic)
				{
					$pic_array=explode(",",$getpic['product_pic']);
					$no_Of_pic=count($pic_array);
					
						//unset($array[1]);
						
						for($i=0;$i<$no_Of_pic;$i++)
							{
								if($pic_array[$i]==$_POST['imgnam'])
								{
									unset($pic_array[$i]);
								}
							}
							
							$path= base_url().'products'.$_POST['imgnam'];
						
							delete_files("products".$path,TRUE);
							

			/**************upadate in database********************************** */
			$impd=implode(",",$pic_array);
			$upd=array("product_pic"=>$impd);
			
			$getpic=$this->Product_Model->imageupdate('products',$condi,$upd);
			

					
				}
}

}
				