<?php session_start();

//session_destroy($sess);
unset($_SESSION["cart_item"]);
/*unset($_SESSION["username"]);
unset($_SESSION["userid"]);*/
if(!isset($_SESSION["cart_item"])){?>

<script>window.location="index.php?success=Your order Successfully placed";</script>
<?php  }?>

?>