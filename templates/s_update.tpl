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
 body{
  background-image:url("./images/1.jpg");
  background-repeat:no-repeat;
   background-size:100% ;  
}
h1{
    font-size: 50px;
    text-align: center;
}
#div1{

    margin: 0 auto;
    width: 250px;
    text-align: center;
    margin-top: 100px;
}
</style>
<body>
    <h1>修改学生信息</h1>

<div id="div1">

    <form name="form4" action="s_updatedo2.php" method="post">

    <table border="1">

         <input type="hidden" name="xh" value="<{$xh}>">

        <tr><td>学号：</td><td><div><{$xh}></div></td></tr>

        <tr><td>姓名：</td><td><input type="text" value="<{$xm}>" name="xm"></td></tr>

        <tr><td>性别：</td><td>

        <input type="radio" value="0" name="sex"  " <{if $sex eq 0}> checked='checked' <{/if}>">男

        <input type="radio" value="1" name="sex"  " <{if $sex eq 1}> checked='checked' <{/if}>" >女</td>

        </tr>
       
        <tr><td>班级：</td><td><input type="text" value="<{$bj}>" name="bj"></td></tr>

        <tr><td colspan="2"><input type="submit" value="确认修改">

        <input type="button" value="返回" onclick="javascript:window.location.href='./smessagedo.php'">

        </td></tr>
    </table>
    </form>
</div>
</body>
</html>