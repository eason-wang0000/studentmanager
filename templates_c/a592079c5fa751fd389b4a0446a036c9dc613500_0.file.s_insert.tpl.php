<?php /* Smarty version 3.1.27, created on 2016-11-23 07:37:24
         compiled from "C:\wamp\www\Student\templates\s_insert.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14924583547342e3313_17607555%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a592079c5fa751fd389b4a0446a036c9dc613500' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\s_insert.tpl',
      1 => 1479886642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14924583547342e3313_17607555',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58354734335649_12290608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58354734335649_12290608')) {
function content_58354734335649_12290608 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14924583547342e3313_17607555';
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
    <h1>增加学生信息</h1>
    <div id="div1">
 <form name="form5" action="s_insertdo2.php" method="post">

    <table border="1">

        <tr><td>学号：</td><td><input type="text" name="xh"></td></tr>

        <tr><td>姓名：</td><td><input type="text"  name="xm"></td></tr>

        <tr><td>性别：</td><td>

        <input type="radio" value="0" name="sex" checked="checked">男

        <input type="radio" value="1" name="sex" >女</td>

        </tr>
       
        <tr><td>班级：</td><td><input type="text"  name="bj"></td></tr>

        <tr><td colspan="2"><input type="submit" value="确认增加">

        <input type="button" value="返回" onclick="javascript:window.location.href='./smessagedo.php'">

        </td></tr>
    </table>
    </form>
</div>
</body>
</html><?php }
}
?>