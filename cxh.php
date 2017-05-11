<?php

session_start();

header("content-type:text/html;charset=utf-8");

$zh=$_SESSION['zh'];

$mm=$_SESSION['mm'];

include_once("conn.php");

 include_once("lib.php");

if(isset($_POST['cb'])){

if(trim($_POST['cxh'])!=""){

         $cxh=$_POST['cxh'];

        $sql="select * from manage";  

        $r=mysql_query($sql);

        $axh=array();

        while($row=mysql_fetch_array($r)){

          $axh[]=$row;

        }

          $i=null;
      
      foreach ($axh as  $v) {

          if($cxh==$v['xh']){

            $i=1;

              break;

          }else{

               $i=0;

            continue;
          }
      }

if($i==1){

if(isset($_POST['cb'])){

 $sql="select * from manage where xh=$cxh";

}

  $r=mysql_query($sql);

  $arr=array();

  while($row=mysql_fetch_array($r)){

     $arr[]=$row;

  }


 $smarty->assign("zh",$zh);

 $smarty->assign("mm",$mm);

 $smarty->assign("arr",$arr);

 $smarty->display("smessage.tpl");

}else{
     echo "<script>alert('不存在该学生');window.location.href='./smessagedo.php';</script>";
}

}else{

    echo "<script>alert('请输入学号');window.location.href='./smessagedo.php';</script>";
}

}else if(isset($_POST['cba'])){

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

}

?>