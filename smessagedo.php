<?php
include_once("lib.php");
session_start();
$zh=$_SESSION['zh'];
$mm=$_SESSION['mm'];

include_once("conn.php");
$sql = "select * from manage";

$r=mysql_query($sql);

$arr=array();

while($row=mysql_fetch_array($r)){

       $arr[]=$row;

}


$smarty->assign("arr",$arr);
$smarty->assign("zh",$zh);
$smarty->assign("mm",$mm);
$smarty->display("smessage.tpl");
?>