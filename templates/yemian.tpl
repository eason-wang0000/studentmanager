<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<style>
h1{
text-align: center;
font-size: 60px;
}
#a{
  font-size: 30px;
  color: red;
}

#div1{
  margin:0 auto;
  width: 500px;
}
body{
  background-image:url("./images/1.jpg");
  background-repeat:no-repeat;
   background-size:100% ;  
}
.b{
width:500px;
height:50px;
margin:10px;
font-size: 30px;
}
</style>

<body>

<div id="a"><strong>你的账号是:<{$zh}></strong></div><br/>

<h1>学生管理系统</h1>



<div id="div1">

<!-- 学生信息 -->

<form name="form2" action="smessagedo.php"  method="post">
 <input class="b" type="submit"   value="进入学生信息管理">
</form>


<!-- 科目信息 -->

<form name="form2" action="kemudo.php"  method="post">
 <input class="b" type="submit"   value="进入科目信息管理">
</form>


<!-- 成绩信息 -->

<form name="form2" action="chengjido.php"  method="post">
 <input class="b" type="submit"   value="进入成绩信息管理">
</form>


<!-- 登录 -->
  
<form name="form1" action="yemiando1.php"  method="post">
<input class="b" type="submit" value="修改密码" name="gmm" >
   <input class="b" type="button" value="退出登录" onclick="tui()" ><br/>
   <input type="hidden" name="mm" value="<{$mm}>">
    <input type="hidden" name="zh" value="<{$zh}>">
  
</form>

</div>

  <script type="text/javascript">
  function tui(){
    window.location.href="./denglu.php"; 
  }

  </script>
</body>
</html>