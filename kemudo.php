<?php
include_once("conn.php");
session_start();
$sql="select * from subject";
$r=mysql_query($sql);
$arr = array();
while($row=mysql_fetch_array($r)){
    $arr[]= $row;
}

include_once("lib.php");
$mm=$_SESSION['mm'];
$zh=$_SESSION['zh'];
$smarty->assign("zh",$zh);
$smarty->assign("mm",$mm);
$smarty->assign("arr",$arr);
$smarty->display("kemu.tpl");
?>