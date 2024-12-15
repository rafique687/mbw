<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends CI_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
       $this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("items", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("items")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('items',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function verify()
{
    echo "Yes";exit;
    echo "<pre>"; print_r($_POST);exit;
    $condi = array('otp' =>$_POST['otp']);
    $data= array('status' =>1 ,'otp'=>'' );
    $rowid=$this->home_model->rowid("registeration",$condi);
    if($rowid)
    {
        //echo "<pre>"; print_r($rowid);exit;
        $fire=$this->home_model->otpverify("registeration",$condi,$data);
        if($fire)
            {
                //verreturn $rowid['userdetails'];
                //return $rowid['userdetails'];
                 $this->response($rowid, REST_Controller::HTTP_OK);
            }
    }
     redirect("../index.php");
}
    	
}