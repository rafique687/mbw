<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->model('Order_Model');
        $this->load->model('adminlogin');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['containt']="admin/login.php";
		$this->load->view('adminlogin.php',$data);
	}

	public function view_order()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
                $condi = array('item_status' => 10 );
               	$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['order']=$this->Order_Model->viewitem("order_table",$condi);
				//echo "<pre>"; print_r($data['order']);exit;
				$data['containt']='admin/view_order.php';
				$this->load->view("admin",$data);
			}
	}
	public function order_details()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
                $condi = array('fnorder_id' => $_GET['orderid'] );
               	$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['orderdetails']=$this->Order_Model->orederdetails("products_order",$condi);
				//echo "<pre>"; print_r($data['orderdetails']);exit;
				$data['containt']='admin/view_orderdetail.php';
				$this->load->view("admin",$data);
			}
	}
	public function updatestatus()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
			//$condi=array("orderid"=>$_GET['id']);
			//$prid=array("parent_id"=>0);
			$data['orderid']=$_GET['id'];
			$data['containt']="admin/status_update.php";
			$data['ordstatus']=$this->Order_Model->getstatus('order_status');
			//echo "<pre>"; print_r($data['ordstatus']);exit;
			$this->load->view("admin",$data);
			}
	}

	public function upd_status()
	{  //echo "<pre>"; print_r($_POST);exit;
		$condi=array("orderid"=>$_POST['id']);
		$upd=array("delevery_status"=>$_POST['status']);
		$data['product']=$this->Order_Model->statusupdate("order_table",$condi,$upd);
		redirect('Manage_order/view_order');
	}

	public function generatebill()
	{
		$condi = array('orderid' => $_GET['orderid'] );
		$data['order']=$this->Order_Model->orderbill("order_table",$condi);
		$orderid = array('fnorder_id' => $_GET['orderid'] );
		$data['product']=$this->Order_Model->orederdetails("products_order",$orderid);
		//echo "<pre>";print_r($data);exit;
		$data['containt']='admin/print_bill.php';
		$this->load->view("admin",$data);
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
	
	public function jquerycity()
	{
		$condi=array("stid"=>$_GET['id']);
		$data['product']=$this->Product_Model->jqsubproduct("city",$condi);
		$this->load->view("city",$data);
	}


}


