<?php ob_start(); ?>


<?php
session_start();?>

<?php
 $_SESSION['id'] = null;
 $_SESSION['name'] = null ;
 $_SESSION['email']= null ;

 header('location:login.php');

 ?>

