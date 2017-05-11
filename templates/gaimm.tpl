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
<style type="text/css">
   body{
  background-image:url("./images/1.jpg");
  background-repeat:no-repeat;
   background-size:100% ;  
}  
h1{
    text-align:center;
    font-size: 50px;
}
#div1{
        margin: 0 auto;
    width: 250px;
    
}
.b{
    margin-bottom: 10px;
}
</style>
<body>
<h1>修改密码</h1>

<div id="div1">
<form name="form1" method="post" action="gaimm.php">
<table>
    <input type="hidden" name="ymm" value="<{$ymm}>">
    <input type="hidden" name="zh" value="<{$zh}>">
    <tr><td>原密码:</td><td colspan="2"><input type="password" name="ymmm" class="b"></td></tr>
    <tr><td>新密码:</td><td colspan="2"><input type="password" name="nmm" class="b"></td></tr>
    <tr><td>确认密码:</td><td colspan="2"><input type="password" name="qmm" class="b"></td></tr>
    <tr><td><input type="submit" value="确定"></td>
    <td><input type="reset" value="重设"></td>
    <td><input type="button" value="返回" name="tui" onclick="location='logindo.php?zh=<{$zh}>&mm=<{$ymm}>'"></td></tr>
    </table>
    </form>
</div>

</body>
</html>