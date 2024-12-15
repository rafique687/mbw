<?php session_start();
//echo "<pre>"; print_r($_POST);exit;
$key=$_POST['key'];
$_SESSION['cart_item'][$key]['quantity']=$_POST['qty'];

?>

  
               <?php 
               $totalitem=0;
               $gradtotal=0;
               $i=0;
               foreach ($_SESSION['cart_item'] as $key => $cart) {?>
                <tr>
                      <td class="text-center">
                       <?php  $pic=explode(",",$cart['image'])?>
                        <a href="#">
                          <img src="<?php echo $_POST['img'].'item/'.$pic[0];?>" alt="<?php echo $cart['item_name'];?>" title="iPod Classic" width="50" height="50">
                        </a>
                      </td>
                      <td class="text-left">
                        <a href="product.html">
                          <?php echo $cart['item_name'];?>
                        </a>
                      </td>
                     <!--  <td class="text-left">product 11</td> -->
                      <td class="text-left">
                        <div style="max-width: 200px;" class="input-group btn-block">
                         <!--  <form id="frm<?php echo $key?>"> -->
                          <input type="number" min="1" class="form-control quantity" size="1" value="<?php echo $cart['quantity'];?>" name="quantity" id="qnt<?php echo $key ;?>">
                          <input type="hidden" value="<?php echo $mydata['baseurl']?>" id="img<?php echo $key ;?>">
                        
                        <input type="hidden" value="<?php echo $mydata['baseurl']?>" id="img<?php echo $key ;?>">
                          <span class="input-group-btn">
                       <button class="upd btn" title=""  data-toggle="tooltip" type="button" data-original-title="Update"  data-key="<?php echo $key ;?>"><i class="fa fa-refresh"></i>
                        </button>
                        <button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove">
                          <a href="?del=<?php echo $key ;?>"><i class="fa fa-times-circle"></i></a></button>
                        </span>
                      </div>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $cart['price'];?>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $total=$cart['price']*$cart['quantity'];?>
                      </td>
                    </tr>
                    
                   
              <?php   $gradtotal += $total;
                      $totalitem += $cart['quantity'];
                      $i++;?>
          <?php  } ?>
          <tr>
            <td class="text-right"></td>
            <td class="text-right">Total Product</td>
            <td class="text-left"><?php echo $totalitem;?></td>
            <td class="text-right">Grand Total</td>
            <td class="text-right"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"><?php echo $gradtotal ;?></td>
        </tr>

