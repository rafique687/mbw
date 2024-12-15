<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->model('Product_Model');
        $this->load->model('home_model');
        $this->load->model('adminlogin');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['containt']="admin/login.php";
		$this->load->view('adminlogin.php',$data);
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
			$data['parent_cate']=$this->Product_Model->mainproductts("products");
			$this->load->view('admin.php',$data);
			//redirect("product/view_product?success=Product Successfully stored");
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

	public function view_product()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
                $condi = array('item_status' => 1 );
                $or = array('item_status' => 2 );
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['product']=$this->Product_Model->viewitem("item",$condi,$or);
				//echo "<pre>"; print_r($data['product']);exit;
				$data['containt']='admin/view_item.php';
				$this->load->view("admin",$data);
			}
	}


	public function iteninsert()
	{
		//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$this->load->library('form_validation');
			$this->form_validation->set_rules('product_name','Product Name', 'required');
			$this->form_validation->set_rules('des', 'Product Description', 'required');
			$this->form_validation->set_rules('sdes', 'Short Description', 'required');
			$this->form_validation->set_rules('offer', 'Offer Details', 'required');
			$this->form_validation->set_rules('mrp', 'Product MRP', 'required');
			$this->form_validation->set_rules('price', 'Product Price', 'required');
			$this->form_validation->set_rules('unit', 'Product Unit', 'required');
				if ($dd['fdd']=$this->form_validation->run() == FALSE)
				{
					//echo validation_errors(); exit;
					$data['mrp']=$_POST['mrp'];
					$data['price']=$_POST['price'];
					$data['unit']=$_POST['unit'];
					$data['offer']=$_POST['offer'];
					$data['product_name']=$_POST['product_name'];
					$data['des']=$_POST['des'];
					$data['sdes']=$_POST['sdes'];
					$data['p_cate']=$_POST['p_cate'];
					$data['stockstatus']=$_POST['stockstatus'];
					$data['subcate']=$_POST['subcate'];
					$data['parent_cate']=$this->Product_Model->mainproduct("products");
					$data['containt']="admin/add_item.php";
					$this->load->view("admin",$data);
				}
				else
				{
					$newpic=trim($_POST['cateimg']);
					$datta = array('item_name'    => $_POST['product_name'],
									"root_cate"   => $_POST['p_cate'],
									"item_status" =>$_POST['stockstatus'],
									'item_pic'    =>$newpic,
									"description" =>$_POST['des'],
									"shortdescription"=>$_POST['sdes'],
									"sub_cate"	  =>$_POST['subcate'],
									"mrp"		  =>$_POST['mrp'],
									"price"		  =>$_POST['price'],
									"unit"		  =>$_POST['unit'],
									"offer"		  =>$_POST['offer']);
					$qry = $this->Product_Model->productinsert("item",$datta);
						if($qry)
						{
							redirect("product/view_product?success=Product Successfully Added");
						}
				}
			}
	}

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
			//$prid=array("parent_id"=>0);
			$data['editid']=$_GET['id'];
			$data['containt']="admin/edit_item.php";
			$data['product']=$this->Product_Model->itemrow('item',$condi);
			$data['p_cate']=$this->Product_Model->mainproduct('products');
			$data['subcate']=$this->Product_Model->edititemm('products');
			//echo "<pre>"; print_r($data['product']);exit;
			$this->load->view("admin",$data);
			}
	}



	public function inser_edititem()
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
		$this->form_validation->set_rules('des', 'Product Description', 'required');
		$this->form_validation->set_rules('mrp', 'Product MRP', 'required');
		$this->form_validation->set_rules('price', 'Product price', 'required');
		$this->form_validation->set_rules('offer', 'Product offer', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$condi=array("item_id"=>$_POST['gett']);
				$data['product']=$this->Product_Model->itemrow('item',$condi);
				$data['p_cate']=$this->Product_Model->mainproduct('products');
				$data['subcate']=$this->Product_Model->edititemm('products');
				$data['editid']=$_POST['gett'];
				$data['parent_cate']=$this->Product_Model->mainproduct("products");
				$data['containt']="admin/edit_item.php";
					$this->load->view("admin",$data);
			}
			else
			{
				if(!empty($_POST['cateimg']))
				{
					$kk=trim($_POST['cateimg']);
					$ll=trim($_POST['oldpic']);
					$newpic=$kk.','.$ll;
				}
				else
				{
					$newpic=$_POST['oldpic'];	
				}
				$data['product_name']=$_POST['product_name'];
				$data['product_name']=$_POST['des'];
				$data['p_cate']=$_POST['p_cate'];
				$data['stockstatus']=$_POST['stockstatus'];
				
				$condi=array("item_id"=>$_POST['gett']);
				$field=array("item_name" 	=> $_POST['product_name'],
								"root_cate"	=> $_POST['p_cate'],
								"item_pic"  	=> $newpic,
								"description"  => $_POST['des'],
								 "offer"		=>$_POST['offer'],
								 "mrp"		=>$_POST['mrp'],
								 "price"		=>$_POST['price'],
								"item_status"	=> $_POST['stockstatus']);
				$fire=$this->Product_Model->editinsert("item",$field,$condi);
				if($fire)
				{ 
					redirect("product/view_product?success=Product Successfully Updated");
				}
			}
		}
	}

	public function delimage()
	{
 // echo "<pre>"; print_r($_POST);exit;
		$condi=array("item_id"=>$_POST['cateid']);
			$getpic=$this->Product_Model->getimage('item',$condi);
			if($getpic)
				{
					$pic_array=explode(",",$getpic['item_pic']);
					$no_Of_pic=count($pic_array);
					for($i=0;$i<$no_Of_pic;$i++)
						{
							if($pic_array[$i]==$_POST['imgnam'])
							{
								unset($pic_array[$i]);
							}
						}
							
					$path= base_url().'item'.$_POST['imgnam'];
				
					delete_files("item".$path,TRUE);
					
					/**************upadate in database********************************** */
					$impd=implode(",",$pic_array);
					$upd=array("item_pic"=>$impd);
					$getpic=$this->Product_Model->imageupdate('item',$condi,$upd);
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
				$condi = array('item_id' => $_GET['id'] );
				$datt=array("item_status"=>0);
				$del=$this->Product_Model->deleteProduct('item',$condi,$datt);
				redirect("product/view_product?success=Product Successfully Deleted");
			}
	}

	public function item_status()
	{  //print_r($_GET);exit;
		$idexp=explode(",",$_GET['id']);
		//print_r($idexp);exit;
		$condi=array("item_id "=>$idexp[0]);
		if($idexp[1]==2)
		{
			 $upd=array("item_status"=>1);
		}
		else
		{
			$upd=array("item_status"=>2);
		}
		 $data['product']=$this->Product_Model->statusupdate("item",$condi,$upd);
		return true;
	}




	public function insertproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{
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
			{
				$datta = array('product_name' =>$_POST['product_name'],'product_pic'=>$_FILES['productpic']['name'],"parent_id"=>$_POST['p_cate'],"status"=>$_POST['stockstatus'] );
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

	

	public function jquerysubcate()
	{
		$condi=array("parent_id"=>$_GET['id']);
		$data['product']=$this->Product_Model->jqsubproduct("products",$condi);
		$this->load->view("jquerysubcate",$data);
	}

	public function jquerystate()
	{
		$condi=array("contery_id "=>$_GET['id']);
		
		$data['product']=$this->Product_Model->jqsubproduct("state",$condi);
		$this->load->view("state",$data);
	}
	//*****************udate product status***********************
	public function category_status()
	{  //echo "<pre>"; print_r($_GET);exit;
		$condi=array("prod_id"=>$_GET['id']);
		if($_GET['statuss']==2)
		{
			$upd=array("status"=>1);
		}
		if($_GET['statuss']==1)
		{
			$upd=array("status"=>2);	
		}
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

	public function uploadfiles()
	{
		$sessiontrue=$this->session->userdata("user_name");
	if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{

		if(!empty($_FILES))
		{
		$name = $_FILES['file']['name'];
		$config['upload_path']          = './item/';
		$userpic= $_FILES['file']['name']= $_FILES['file']['name'];
		$_FILES['file']['type']= $_FILES['file']['type'];
		$_FILES['file']['tmp_name']= $_FILES['file']['tmp_name'];
		$_FILES['file']['error']= $_FILES['file']['error'];
		$_FILES['file']['size']= $_FILES['file']['size'];    
		$uploadPath = './item/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('file');
		echo json_encode($name);
			exit();
		}
		
		} 
	}
public function products() 
{  
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi=array("section_id"=>2);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['title']="Product";
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$condii = array('sub_cate'=>$_GET['id']);
    $cateid = array('prod_id'=>$_GET['id']);
	$or=array('status'=>1);
	$data['catename']=$this->Product_Model->getcatename('products',$cateid);
	//echo "<pre>"; print_r($data['catename']);exit;
   	$data['itemdetails'] = $this->Product_Model->viewitemm("item",$condii);
   //	echo "<pre>"; print_r($data['itemdetails']);exit;
    $data['brand']=$this->Product_Model->fsubproduct('products');
   	$data['containt'] = "batteryworld/product.php";
	$this->load->view('front',$data);
   		
}
 
public function products_details()
{
	$data['title']="product-details";
	$condi = array('section_id' =>2);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$condii = array('item_id'=>$_GET['pid']);
	$or=array('status'=>1);
   	$data['itemdetails'] = $this->Product_Model->item_details("item",$condii);
   	$related=array("sub_cate"=>$data['itemdetails']['sub_cate']);
   	$data['relatedproduct'] = $this->Product_Model->viewitemm("item",$related);
   	//echo "<pre>"; print_r($data['relatedproduct']);exit;
    $data['brand']=$this->Product_Model->fsubproduct('products');
   	$data['containt'] = "batteryworld/product-details.php";
	$this->load->view('front',$data);
   		
}

/*public function productdetails()
{
	$condi = array('section_id' =>2);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$condii = array('item_id'=>$_GET['pid']);
	$or=array('status'=>1);
   	$data['itemdetails'] = $this->Product_Model->item_details("item",$condii);
   	$related=array("sub_cate"=>$data['itemdetails']['sub_cate'];);
   	$data['relatedproduct'] = $this->Product_Model->viewitemm("item",$related);
   	//echo "<pre>"; print_r($data['relatedproduct']);exit;
    $data['brand']=$this->Product_Model->fsubproduct('products');
   	$data['containt'] = "batteryworld/product-details.php";
	$this->load->view('front',$data);
   		
}*/
public function offer()
{
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi=array("section_id"=>2);
	$data['title']="Product";
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$condi = array('section_id' =>2);	
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$condii = array('offer'=>'yes');
	$or=array('status'=>1);
   	$data['brandoffer'] = $this->Product_Model->brandoffer("item",$condii);
   //	echo "<pre>"; print_r($data['brandoffer']);exit;
    $data['brand']=$this->Product_Model->fsubproduct('products');
   	$data['containt'] = "batteryworld/healthy-offerings.php";
	$this->load->view('front',$data);
   		
}
public function search()
{
	//echo "<pre>";  print_r();exit;
		$data['searchbar'] = $this->Product_Model->searchbar("item",$_GET['inputed']);
		//$data['containt'] = "batteryworld/serachbar";
		$this->load->view('batteryworld/serachbar',$data);
}

public function productbybrand() 
{  
	$contact=array('section_id'=>1);
	$data['contact'] = $this->home_model->home("setting_table",$contact);
	$media=array('section_id'=>6);
	$data['media'] = $this->home_model->home("setting_table",$media);
	$condi=array("section_id"=>2);
	$data['content'] = $this->home_model->home("setting_table",$condi);
	$logo = array('sessting_id' =>4);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['title']="Product";
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	//$condii = array('sub_cate'=>$_GET['id']);
   // $cateid = array('prod_id'=>$_GET['id']);
	$or=array('status'=>1);
	$data['itemdetails'] = $this->Product_Model->searchbar("item",$_GET['search']);
  	/*$condii = array('sub_cate'=>$data['itemdetail'][0]['root_cate']);
   	$data['itemdetails'] = $this->Product_Model->viewitemm("item",$condii);*/
    $data['brand']=$this->Product_Model->fsubproduct('products');
   	$data['containt'] = "batteryworld/products.php";
	$this->load->view('front',$data);
   		
}

}
?>


