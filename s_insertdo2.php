<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
$xh=$_POST['xh'];
$xm=$_POST['xm'];
$sex=$_POST['sex'];
$bj=$_POST['bj'];
if($xh!=""&&$xm!=""&&$bj=!""){
$sql="insert INTO manage(xh, xm, sex, bj) VALUES ('$xh','$xm','$sex','$bj')";
$r=mysql_query($sql);
if($r){
echo "<script>alert('添加成功');javascrip:window.location.href='./smessagedo.php'</script>";
}else{
echo "<script>alert('添加失败,请检查是否信息有误或已存在该学生');javascrip:window.location.href='s_insertdo.php'</script>";
}
}else{
    echo "<script>alert('所有的学生信息都不能为空');javascrip:window.location.href='s_insertdo.php'</script>";
}
?>