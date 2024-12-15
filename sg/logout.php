<?php session_start();

session_destroy($sess);
unset($_SESSION["mobile"]);
unset($_SESSION["username"]);
unset($_SESSION["userid"]);
if(!isset($_SESSION["mobile"])){?>

<script>window.location="index.php";</script>
<?php  }?>