<?php /* Smarty version 3.1.27, created on 2016-11-22 15:40:43
         compiled from "C:\wamp\www\Student\templates\gaimm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11752583466fbabab96_31925469%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a73dba04c23076dfeb65af2d86d1aa34aa38f0e' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\gaimm.tpl',
      1 => 1479829241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11752583466fbabab96_31925469',
  'variables' => 
  array (
    'ymm' => 0,
    'zh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583466fbb19b87_63279161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583466fbb19b87_63279161')) {
function content_583466fbb19b87_63279161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11752583466fbabab96_31925469';
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
    <input type="hidden" name="ymm" value="<?php echo $_smarty_tpl->tpl_vars['ymm']->value;?>
">
    <input type="hidden" name="zh" value="<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
">
    <tr><td>原密码:</td><td colspan="2"><input type="password" name="ymmm" class="b"></td></tr>
    <tr><td>新密码:</td><td colspan="2"><input type="password" name="nmm" class="b"></td></tr>
    <tr><td>确认密码:</td><td colspan="2"><input type="password" name="qmm" class="b"></td></tr>
    <tr><td><input type="submit" value="确定"></td>
    <td><input type="reset" value="重设"></td>
    <td><input type="button" value="返回" name="tui" onclick="location='logindo.php?zh=<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
&mm=<?php echo $_smarty_tpl->tpl_vars['ymm']->value;?>
'"></td></tr>
    </table>
    </form>
</div>

</body>
</html><?php }
}
?>