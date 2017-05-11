<?php

session_start();

header("content-type:text/html;charset=utf-8");

//返回

if(isset($_GET['zh'])){

  $zh = $_GET['zh'];

$mm = $_GET['mm'];

  include_once("lib.php");

       $smarty->assign("zh",$zh);

             $smarty->assign("mm",$mm);

     $smarty->display('yemian.tpl');
}

else{

  //判断账号密码

if(isset($_POST['zh'])){

$zh = $_POST['zh'];

$mm = $_POST['mm'];


$_SESSION['zh']=$zh;

$_SESSION['mm']=$mm;

$yzm = $_POST['code'];

//判断验证码
//
if(isset($_POST['code'])){

       $yz = $_POST['code'];


       $code = $_SESSION["code"];

       if($yz!=$code){

           echo "<script>alert('验证码错误');window.location.href='./denglu.php';</script>";

       }

    }

include_once('conn.php');

$sql="select * from user";

$r=mysql_query($sql);

while($row=mysql_fetch_array($r)){

      if($row['zh']==$zh&&$row['mm']==$mm){

        $strxh="/=|or/";

            if(!preg_match($strxh, $mm)){

          include_once("lib.php");

             $smarty->assign("zh",$zh);

             $smarty->assign("mm",$mm);

             $smarty->display('yemian.tpl');   

            }else{

           echo "<script>alert('账号密码存在敏感字符');window.location.href='./denglu.php';</script>";  
        }

            

      }else{

 echo "<script>alert('账号或密码错误');window.location.href='./denglu.php';</script>";

      }

}

}else{

   echo "<script>alert('账号或密码不能为空');window.location.href='./denglu.php';</script>";

}

}

?>