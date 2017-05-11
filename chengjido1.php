<?php

session_start();

header("content-type:text/html;charset=utf-8");

          $zh=$_SESSION['zh'];

          $mm=$_SESSION['mm']; 

          $ncj=$_POST['ncj']; 

          $kna=$_POST['kna'];

          $axh=$_POST['axh'];

           include_once("conn.php");

//修改学生成绩           

if(isset($_POST['gai'])){

$i=0;

foreach ($axh as $k => $v) {

       $sql ="update chengji set cj=$ncj[$i] where xh=$v and km_id=$kna[$i]";


      mysql_query($sql);

       $i++;
    
    }

     echo '<script>alert("修改成功");location.href="chengjido.php";</script>';

}else{

//判断是否有输入学号

$sql="select * from chengji";

        $r=mysql_query($sql);

         $wxh=array();

          while($row=mysql_fetch_array($r)){
   
           $wxh[]=$row;

          }


if(trim($_POST['xh'])!=""){

     $xh=$_POST['xh'];

          $i=null;
      
      foreach ($wxh as $k => $v) {

          if($xh==$v['xh']){

            $i=1;

              break;

          }else{

               $i=0;

            continue;
          }
      }

if($i==1){

$km=$_POST['km'];
      
//判断是查询全部科目还是单查

if(isset($_POST['qc'])){

 $sql="select * from chengji a,manage b , subject c where a.xh=b.xh and a.km_id=c.id and a.xh=$xh";

}

if(isset($_POST['xc'])){

 $sql="select * from chengji a,manage b , subject c where a.xh=b.xh and a.km_id=c.id and a.xh=$xh and c.km_name='$km'";

}

  $r=mysql_query($sql);

  $aarr=array();

  while($row=mysql_fetch_array($r)){

     $aarr[]=$row;

  }

  $sql="select * from subject";

$r=mysql_query($sql);

$arr1=array();

while($row=mysql_fetch_array($r)){
   
   $arr1[]=$row;

}

 include_once("lib.php");

 $smarty->assign("zh",$zh);

 $smarty->assign("mm",$mm);

  $smarty->assign("arr1",$arr1);

 $smarty->assign("aarr",$aarr);

 $smarty->display("chengji.tpl");

}else{
     echo "<script>alert('不存在该学生');window.location.href='./chengjido.php';</script>";
}

}else{

    echo "<script>alert('请输入学号');window.location.href='./chengjido.php';</script>";
}

}


?>