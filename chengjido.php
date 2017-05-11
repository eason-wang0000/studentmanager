<?php
header("content-type:text/html;charset=utf-8");

 session_start();

 $zh=$_SESSION['zh'];

 $mm=$_SESSION['mm'];

  include_once("conn.php");

  $sql="select * from manage";

  $r=mysql_query($sql);

  $arr=array();

  while($row=mysql_fetch_array($r)){

     $arr[]=$row;

  }

      $sql1="select * from subject";

  $r1=mysql_query($sql1);

  $arr1=array();

  while($row1=mysql_fetch_array($r1)){

     $arr1[]=$row1;

  }

//自动添加成绩表记录 成绩为空

foreach ($arr as $k => $v) {

    $sql = "select * from chengji where xh='".$v['xh']."'";

    $r = mysql_query($sql);

foreach ($arr1 as $k1 => $v1){

    if (!($row = mysql_fetch_array($r))){   

            $sql="insert into chengji (xh,km_id)values('".$v['xh']."','".$v1['id']."')";

            mysql_query($sql);

        }

}

}



$sql="select * from chengji a,manage b , subject c where a.xh=b.xh and a.km_id=c.id";

$r=mysql_query($sql);

$aarr=array();

while($row=mysql_fetch_array($r)){

     $aarr[]=$row;
     
  }

 include_once("lib.php");

 $smarty->assign("zh",$zh);
 
$smarty->assign("mm",$mm);

 $smarty->assign("arr1",$arr1);

 $smarty->assign("aarr",$aarr);

$smarty->display("chengji.tpl");

?>