<?php
session_start();
include_once('includes/config.php');
$uname=$_SESSION['uname'];     
$uip = $_SERVER ['REMOTE_ADDR'];
$link= $_SERVER['REQUEST_URI'];
$action='logout';
  $status=1;
      mysqli_query($con,"insert into  tbllogs(userName,userIp,userAction,actionUrl,actionStatus) values('$uname','$uip','$action','$link','$status')");
      session_unset();
session_destroy();
 echo "<script>window.location.href='index.php'</script>";

?>