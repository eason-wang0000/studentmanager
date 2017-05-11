<?php /* Smarty version 3.1.27, created on 2016-11-22 14:39:58
         compiled from "C:\wamp\www\Student\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6125583458be323b79_42350240%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1763da906103e2a0fe98f7fa624983b67669af85' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\login.tpl',
      1 => 1479825597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6125583458be323b79_42350240',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583458be370ba9_93652095',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583458be370ba9_93652095')) {
function content_583458be370ba9_93652095 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6125583458be323b79_42350240';
?>
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
.ww{
  font-size: 30px;
  color: red;
}
.cc{
      font-size: 30px;
  color: green;
}

#denglu{
  border: solid 1px red;
  margin: 0 auto;
  width: 300px;
  margin-top: 200px;
  background-color: yellow;
}
h1{
  text-align:center
}
#tb1{
   margin: 0 auto;
  width: 280px;
}
</style>
<body>

<?php echo '<script'; ?>
>
function yz(){
    var code = document.getElementById("code").value;

    if (code.length==4){
        
        try{
            xmlhttp = new window.XMLHttpRequest();
        }catch(e){
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.open("GET","yz.php?code="+code,true);
        
        xmlhttp.onreadystatechange =schange;
        xmlhttp.send();
        
    }else{
        document.getElementById("ph").innerHTML="×";
    }
    
}

function schange(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200){
    
        var rlt = xmlhttp.responseText;
        if (rlt == "r"){
              document.getElementById("ph").className="cc";
            document.getElementById("ph").innerHTML="√";
         
        }else{
            document.getElementById("ph").innerHTML="×";
        }
        xmlhttp = null;
    }
}


<?php echo '</script'; ?>
>



<div id="denglu">
  <h1>登录</h1>
 <form action="logindo.php" method="post" name="form1">
<table id="tb1">
    <tr><td>用户名:</td><td colspan="2"><input type="text" name="zh"></td></tr>
    <tr><td>密码:</td><td colspan="2"><input type="password" name="mm"></td></tr>
    <tr><td>验证码:</td><td><input type="text" name="code" onkeyup="yz()" size="10" id="code" /></td>
     <td><img id="phcode" src="code.php" onclick="this.src='code.php?id='+Math.random()"/></td>
     <td><strong><div id="ph" class="ww"></div></strong></td><tr>
    <tr><td><input type="submit" value="登录"></td><td><input type="reset" value="重置"></td></tr>
</table>
 </form>
 </div>
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>