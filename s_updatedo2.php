<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
$xh=$_POST['xh'];
$xm=$_POST['xm'];
$sex=$_POST['sex'];
$bj=$_POST['bj'];
$sql="update manage SET xm='$xm',sex='$sex',bj='$bj' WHERE xh='$xh'";
if(mysql_query($sql)){
     echo "<script>alert('修改成功');javascrip:window.location.href='./smessagedo.php'; </script>";
}else{
    echo "<script>alert('修改失败');javascrip:window.location.href='./smessagedo.php'; </script>";
}



?>