<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
$xh =$_GET['xh'];
$sql="delete from manage where xh='$xh'";
$sql1="delete from chengji where xh='$xh'";
if(mysql_query($sql)&&mysql_query($sql1)){
 echo "<script>javascrip:window.location.href='./smessagedo.php'; </script>";
}else{
    echo "<script>alert('删除失败')javascrip:window.location.href='./smessagedo.php'; </script>";
}
?>