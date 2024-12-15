<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	
	public function maillist($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function home($tab,$condi)
	{	$this->db->select("*");
		$this->db->where($condi);
		//$this->db->or_where($or);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function services($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function product($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$this->db->limit(5,0);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function getotp($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->limit(1,0);
		$this->db->order_by("reg_id", "desc");
		$qry=$this->db->get();
		return $qry->row_array();

	}
	public function bannerr($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function productdetails($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();
	}

	public function subcategory($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->where("parent_id !=",0);
		$this->db->order_by("prod_id", "desc");
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function catename($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();
	}

	public function itemlist($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function registre($tab,$data)
	{
		$this->db->insert($tab,$data);
    	return true;

	}
	public function news($tab,$data)
	{
		$this->db->insert($tab,$data);
    	return true;

	}
	public function insertaddress($tab,$data)
	{
		$this->db->insert($tab,$data);
    	return true;

	}
	public function updaddress($tab,$upd,$condi)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;

	}
	public function upateusename($tab,$upd,$condi)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;

	}
	public function place_oreder($tab,$data)
	{
		$this->db->insert($tab,$data);
    	$insert_id = $this->db->insert_id();
	    return  $insert_id;

	}
	public function place_prod($tab,$data)
	{
		$this->db->insert($tab,$data);
    	return true;

	}

	public function otpverify($tab,$condi,$upd)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;
	}
	public function login($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();

	}
	public function rowid($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();
	}
	public function userprofile($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab." as usr");
		$this->db->join('user_address as adr', 'usr.reg_id = adr.user_id', 'left');
		$this->db->join("contry as cnt",'adr.country=cnt.contryid','left');
		$this->db->join("state as sts",'adr.state=sts.stateid','left');
		//$this->db->group_by("address");
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function user_address($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();
		
	}

	public function client($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab);
		 $this->db->limit(6);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function country($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function getusername($tab,$where)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->where($where);
		$qry=$this->db->get();
		return $qry->row_array();

	}
	public function address($tab,$where)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->where($where);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function state($tab,$condi)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->where($condi);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function viewitem($tab,$condi)
	{
		$this->db->from('order_table ort');
		$this->db->join('registeration reg', "ort.customer_id = reg.reg_id", 'inner');
		$this->db->join('products_order prd', "ort.orderid = prd.fnorder_id", 'inner');
		//$this->db->join('user_address usr', "reg.reg_id = usr.user_id", 'inner');
		$this->db->join('order_status ods','ort.delevery_status=ods.sts_id','left');
		//$this->db->where("usr.position=",1);
		$this->db->where("delevery_status!=",10);
		$query = $this->db->get();
		return $query->result_array(); 
	}
	public function orderhistory($tab,$condi)
	{
		$this->db->from('order_table ort');
		$this->db->join('registeration reg', "ort.customer_id = reg.reg_id", 'inner');
		$this->db->join('products_order prd', "ort.orderid = prd.fnorder_id", 'inner');
		//$this->db->join('user_address usr', "reg.reg_id = usr.user_id", 'inner');
		$this->db->join('order_status ods','ort.delevery_status=ods.sts_id','left');
		//$this->db->where("usr.position=",1);
		$this->db->where("delevery_status!=",10);
		$this->db->where($condi);
		$query = $this->db->get();
		return $query->result_array(); 
	}
	public function orderbill($tab,$condi)
	{
		/*$this->db->from($tab);
		$this->db->where($condi);
		$query = $this->db->get();*/
		$this->db->from('order_table ort');
		$this->db->join('registeration reg', "ort.customer_id = reg.reg_id", 'inner');
		//$this->db->join('products_order prd', "ort.orderid = prd.fnorder_id", 'inner');
		$this->db->join('user_address usr', "reg.reg_id = usr.user_id", 'inner');
		$this->db->where($condi);
		$query = $this->db->get();
		return $query->row_array(); 
	}

	public function orederdetails($tab,$condi)
	{	$this->db->from($tab." as pod");
		$this->db->join("item as itm","pod.prod_name=itm.item_name",'inner');
		$this->db->join("order_table as ort","pod.fnorder_id=ort.orderid",'inner');
		//$this->
		$this->db->where($condi);
		$query = $this->db->get();
		return $query->result_array(); 
	}
	public function existnum($tab,$condi)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$this->db->where($condi);
		$qry=$this->db->get();
		return $qry->row_array();

	}
	public function getotplogintime($tab,$condi)
	{
		$this->db->select("otp");
		$this->db->from($tab);
		$this->db->where($condi);
		$this->db->limit(1,0);
		$this->db->order_by("reg_id", "desc");
		//$qry=$this->db->get();
		 return $this->db->get()->result();
		//return $qry->row_array();
	}

	public function updateotp($tab,$condi,$upd)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;

	}

	public function jqsubproduct($tab,$condi)
	{
		     $this->db->select('*');
		     $this->db->where($condi);
			 $this->db->from($tab);
			 $query = $this->db->get();
			return $query->result_array();

	}

	public function itemlistorderby($tab,$condi,$ord)
	{  // echo "ys";
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->order_by('item_name', $ord);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function itemlistsearch($tab,$status,$itemname)
	{
		$this->db->like('item_name', $itemname);
		$res = $this->db->get($tab);
		return $res->result_array();

	}



	
}
	
	
    