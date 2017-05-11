<?php
header("content-type:text/html;charset=utf-8");

$zh=$_POST['zh'];
$ymm=$_POST['ymm'];
$ymmm=$_POST['ymmm'];
$nmm=$_POST['nmm'];
$qmm=$_POST['qmm'];
if($ymm == $ymmm){
if($nmm!=""&&$qmm!=""){
if($nmm!=$qmm){
  echo "<script>alert('两个密码不一致');javascrip:window.history.back(-1);</script>";
} else{

if($ymm!=$nmm){
    include_once("conn.php");
    $sql="update user SET mm='$nmm' WHERE zh='$zh'";
    mysql_query($sql);
echo "<script>alert('修改密码成功，请重新登录');javascrip:window.location.href='denglu.php';</script>";

}else{
    echo "<script>alert('新密码不能和旧密码相同');javascrip:window.history.back(-1);</script>";
}
}
}else{
    echo "<script>alert('新密码不能为空');javascrip:window.history.back(-1);</script>";
}
   
}else{
    echo "<script>alert('原密码错误');javascrip:window.history.back(-1);</script>";
}




?>