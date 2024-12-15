<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_Model extends CI_Model {

	public function viewitem($tab,$condi)
	{
		$this->db->from('order_table ort');
		$this->db->join('registeration reg', "ort.customer_id = reg.reg_id", 'inner');
		$this->db->join('products_order prd', "ort.orderid = prd.fnorder_id", 'inner');
		//$this->db->join('user_address usr', "reg.reg_id = usr.user_id", 'inner');
		$this->db->join('order_status ods','ort.delevery_status=ods.sts_id','left');
		//$this->db->where("usr.position=",1);
		//$this->db->where("delevery_status!=",10);
		$query = $this->db->get();
		return $query->result_array(); 
	}
	public function orederdetails($tab,$condi)
	{	$this->db->from($tab." as pod");
		$this->db->join("item as itm","pod.prod_name=itm.item_name",'inner');
		$this->db->where($condi);
		$query = $this->db->get();
		return $query->result_array(); 
	}
	public function getstatus($tab)
	{
		$this->db->from($tab);
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
	public function statusupdate($tab,$condi,$upd)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;

	}
	public function deleteorder($tab,$condi)
	{
		//echo "ysssss";exi
		$this->db->where($condi);
		$this->db->delete($tab);
		return true;
	}


	

	
}
    ?>