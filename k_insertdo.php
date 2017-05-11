<?php
header("content-type:text/html;charset=utf-8");

include_once("conn.php");

$nkm=$_POST['nkm'];

$sql="insert INTO subject(km_name) VALUES ('$nkm')";

if($nkm!=""&&strlen(trim($nkm))>0){

if(mysql_query($sql)){

 echo "<script>alert('增加成功');javascrip:window.location.href='./kemudo.php'; </script>";

}else{

    echo "<script>alert('增加失败');javascrip:window.location.href='./kemudo.php'; </script>";

}

}else{
    echo "<script>alert('增加的科目不能为空');javascrip:window.location.href='./kemudo.php'; </script>";

}

?>