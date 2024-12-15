<?php
require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycart extends CI_Controller {

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

public function index()
{ 	
/*	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");*/
// echo "<pre>"; print_r($_POST);exit;
$cartdata=$this->session->userdata('cart_item');
//echo "<pre>"; print_r($cartdata[7]);exit;

if(isset($_POST["qnty"])){ 
  $where=array("item_id"=>$_POST['item_id']);
  $productByCode=$this->Cart_model->getitem("item",$where);
  $itemArray = array(
 					$_POST["item_id"]=>array('item_name'=> $productByCode["item_name"],
                   							 'item_id'	=> $productByCode["item_id"],
                   							 'quantity' => $_POST["qnty"],
                   								'price' => $productByCode["price"],
                   								'image' => $productByCode["item_pic"],
                   							)
 				  );
  //echo "<pre>"; print_r($itemArray);exit;

//if(!empty($_SESSION["cart_item"]))
  if(!empty($this->session->userdata('cart_item')))
 {
    
    $flag = false;
    $index = "";
    foreach($this->session->userdata('cart_item') as $k=>$val)
    {
     if($_POST["item_id"] == $val["item_id"]){
      $flag = true;
      $index = $k;
     // echo "flag okays ";exit;

     }
    }

  
    if($flag){  
        
      $_SESSION["cart_item"][$index]["quantity"] += $_POST["qnty"];
      
    }
 else {
 
    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);



  }
}
else {
     
       $this->session->set_userdata('cart_item', $itemArray);
    }
    $tt=count($_SESSION["cart_item"]);
      echo $tt=count($this->session->userdata('cart_item'));exit; }
}

public function itemplus()
{
  if($_POST['tag']=='add')
  {
   $flag = false;
    $index = "";
    foreach($this->session->userdata('cart_item') as $k=>$val)
    {
     if($_POST["item_id"] == $val["item_id"]){
      $flag = true;
      $index = $k;
     // echo "flag okays ";exit;

     }
    }

  
    if($flag){  
        
      $_SESSION["cart_item"][$index]["quantity"] += 1;
      echo  $_SESSION["cart_item"][$index]["quantity"];exit;
      
    }
  }
  else{  
    $flag = false;
    $index = "";
    foreach($this->session->userdata('cart_item') as $k=>$val)
    {
     if($_POST["item_id"] == $val["item_id"]){
      $flag = true;
      $index = $k;
     // echo "flag okays ";exit;

     }
    }

  
    if($flag){  
        
      $_SESSION["cart_item"][$index]["quantity"] -=1 ;
      if($_SESSION["cart_item"][$index]["quantity"]==0)
      {
        unset($_SESSION["cart_item"][$index]);
        // $this->session->unset_userdata($_SESSION["cart_item"][$index]);
         echo "remove";exit;
      }
      echo  $_SESSION["cart_item"][$index]["quantity"];exit;
      
    }

  }
}
	
public function viewcart()
{  //echo "ysss";exit;
	$cartdata=$this->session->userdata('cart_item');
  //echo "<pre>"; print_r($cartdata);exit;
   $tt=($cartdata);
   if(!empty($this->session->userdata('cart_item')))
    { 
  foreach($cartdata as $key=>$item)
  { //echo "<pre>"; print_r();exit;?>
      <table class="table table-striped">
          <tbody id="">
              <tr class="itemclass">
                <td class="text-center" style="width:70px ;">
                
                    <?php $itempic=explode(",",$item['image']);?>
                    <img src="<?php echo base_url()?>item/<?php echo $itempic[0]?>" style="width:70px" alt="<?php echo $item['item_name']?>" title="<?php echo $item['item_name']?>" class="preview"> 
                
                </td>
              <td class="text-left" style="width:100px;color: #000;"> 
                  <!-- <a style="color: red !important;"> -->
                    <?php echo $item['item_name']?><br>
                    (<sub><?php echo $item['quantity']?> Pc.</sub>)
                  <!-- </a>  -->
              </td>
              <td class="text-center" style=" width: 150px;"> <?php echo $item['quantity']?> X <?php echo $item['price']?> = <?php $total= $item['quantity'] * $item['price']; echo $total;?></td>
            </tr>
            </tbody>
    </table>
  <?php }
}
else{?>
   <table class="table table-striped">
          <tbody id="">
              <tr class="itemclass">
                <td><h1>Not Item In Cart</h1></td>
            </tr>
            </tbody>
    </table> 

<?php }
}
public function cart()
{
 $data['title']="Your Cart";
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
  $data['containt'] = "batteryworld/mycart.php";
  $this->load->view('front',$data);
}

public function deleteCartItem()
{
  //echo "<pre>"; print_r($_POST);exit;
   foreach($this->session->userdata('cart_item') as $k=>$val)
    {
     if($_POST["item_id"] == $val["item_id"]){ 
     // echo print_r($_SESSION['cart_item'][$k]);exit;
      unset($_SESSION['cart_item'][$k]);
     echo 1;exit;

     }
    }
}

public function placeorder()
{
   
  if($_POST['order_type']=='COD')
  {
    $user=$this->session->userdata("client_details");
    $totalitem=count($this->session->userdata("cart_item"));
    $orderdetails=array("customer_id"=>$user['userid'],
                         "total_item"=>$totalitem,
                         "grand_total"=>$_POST['total_amount'],
                          "paid_method"=>$_POST['order_type'],
                          "addressid"=>$_POST['address']);
    $id=$this->Cart_model->place_oreder('order_table',$orderdetails);
    if($id)
    {
      
      $ord=array('orderid'=>$id);
      $this->session->set_userdata("orderid",$ord);
      echo $id ;exit;
     
      
     }
   else
   {

    echo "problem to product add in your order";exit;
   }
 }
 else{
    $orderinfo=array("gramdtotal"=>$_POST['total_amount'],"address"=>$_POST['address']);
    $this->session->set_userdata('sortinfo',$orderinfo);
    //print_r($this->session->userdata('sortinfo'));
      echo utf8_decode('online'); exit;
 }
 

      } 
           
      

public function add_orderproduct()
{

 $ord=$this->session->userdata('orderid');
//echo "<pre>"; print_r($ord);exit;
 $cartporduct=$this->session->userdata("cart_item");
  foreach($cartporduct as $item)
      {
        $totalprice=$item['price']*$item['quantity'];
        $addproduct=array("fnorder_id"=>$ord['orderid'],
                          "prod_name"=>$item['item_name'],
                          "prod_qty"=>$item['quantity'],
                          "unit_price"=>$item['price'],
                          "total_price"=>$totalprice
                        );
     
       $added=$this->Cart_model->place_prod('products_order',$addproduct);
      
     }

//$this->session->unset_userdata('nation')
     $this->session->unset_userdata("cart_item");
     $this->session->unset_userdata('orderid');
    redirect('mycart/thanks');exit;
}
public function thanks()
{
  $data['title']="success";
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
  $data['containt'] = "batteryworld/thanks.php";
  $this->load->view('front',$data);
}

public function razarpay()
{
  $gramdtotal=0;
  $cartporduct=$this->session->userdata("cart_item");
  foreach($cartporduct as $item)
      {
        $totalprice=$item['price']*$item['quantity'];
        $addproduct=array("prod_name"=>$item['item_name'],
                          "prod_qty"=>$item['quantity'],
                          "unit_price"=>$item['price'],
                          "total_price"=>$totalprice
                        );
        $gramdtotal += $item['quantity']*$item['price'];
       }
  $sortinffo=$this->session->userdata('sortinfo');
  //echo "<pre>"; print_r($sortinffo);exit;
  $data['title']="Payment";
  $contact=array('section_id'=>1);
  $data['grandtotal']=$sortinffo['gramdtotal'];
  $data['address']=$sortinffo['address'];
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
  $data['containt'] = "batteryworld/online.php";
  $this->load->view('front',$data);

}
public function online()
{
  echo 1;exit;
}

public function success()
{ 
  //echo "<pre>"; print_r($_POST);exit;
  $user=$this->session->userdata("client_details");
    $totalitem=count($this->session->userdata("cart_item"));
    $orderdetails=array("customer_id"=>$user['userid'],
                         "total_item"=>$_POST['qnty'],
                         "grand_total"=>$_POST['grandtotal'],
                          "paid_method"=>$_POST['methodd'],
                          "addressid"=>$_POST['address'],
                          "razorpay_payment_id"=>$_POST['razorpay_payment_id']
                        );

    $id=$this->Cart_model->place_oreder('order_table',$orderdetails);
    if($id)
    {
        $itemname=$_POST['productname'];
        $qty=$_POST['qty'];
        $priceperitem=$_POST['perproductpirce'];
        foreach($itemname as $key=>$item)
        {  
        
         $subprice=$qty[$key]*$priceperitem[$key];
         $inserproduct=array("fnorder_id"=>$id,
                        "prod_name"=>$item,
                         "prod_qty"=>$qty[$key],
                         "unit_price"=>$priceperitem[$key],
                         "total_price"=>$subprice
                       );
         $added=$this->Cart_model->place_prod('products_order',$inserproduct);
        }
         $this->session->unset_userdata("sortinfo");
         $this->session->unset_userdata("cart_item");
        $this->session->unset_userdata('orderid');
        redirect('mycart/thanks');exit;
    }
  }
  public function userlogout()
  {
    $this->session->unset_userdata("client_details");
    redirect(base_url());
  }
}
?>






	