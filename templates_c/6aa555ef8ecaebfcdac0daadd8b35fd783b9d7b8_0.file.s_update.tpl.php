<?php /* Smarty version 3.1.27, created on 2016-11-23 07:38:03
         compiled from "C:\wamp\www\Student\templates\s_update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109015835475b636a83_66353827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa555ef8ecaebfcdac0daadd8b35fd783b9d7b8' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\s_update.tpl',
      1 => 1479886681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109015835475b636a83_66353827',
  'variables' => 
  array (
    'xh' => 0,
    'xm' => 0,
    'sex' => 0,
    'bj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5835475b81bee2_28726803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835475b81bee2_28726803')) {
function content_5835475b81bee2_28726803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109015835475b636a83_66353827';
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
    <h1>修改学生信息</h1>

<div id="div1">

    <form name="form4" action="s_updatedo2.php" method="post">

    <table border="1">

         <input type="hidden" name="xh" value="<?php echo $_smarty_tpl->tpl_vars['xh']->value;?>
">

        <tr><td>学号：</td><td><div><?php echo $_smarty_tpl->tpl_vars['xh']->value;?>
</div></td></tr>

        <tr><td>姓名：</td><td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['xm']->value;?>
" name="xm"></td></tr>

        <tr><td>性别：</td><td>

        <input type="radio" value="0" name="sex"  " <?php if ($_smarty_tpl->tpl_vars['sex']->value == 0) {?> checked='checked' <?php }?>">男

        <input type="radio" value="1" name="sex"  " <?php if ($_smarty_tpl->tpl_vars['sex']->value == 1) {?> checked='checked' <?php }?>" >女</td>

        </tr>
       
        <tr><td>班级：</td><td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['bj']->value;?>
" name="bj"></td></tr>

        <tr><td colspan="2"><input type="submit" value="确认修改">

        <input type="button" value="返回" onclick="javascript:window.location.href='./smessagedo.php'">

        </td></tr>
    </table>
    </form>
</div>
</body>
</html><?php }
}
?>