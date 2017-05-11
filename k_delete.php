<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
$id=$_GET['id'];
$sql="delete from subject where id='$id'";
if(mysql_query($sql)){
  echo "<script>javascrip:window.location.href='./kemudo.php'; </script>";

}else{
echo "<script>alert('删除失败')javascrip:window.location.href='./kemudo.php'; </script>";
}
?>