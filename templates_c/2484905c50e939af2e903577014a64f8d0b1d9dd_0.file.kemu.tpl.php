<?php /* Smarty version 3.1.27, created on 2016-11-22 15:36:02
         compiled from "C:\wamp\www\Student\templates\kemu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5328583465e2dbddb0_21247087%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2484905c50e939af2e903577014a64f8d0b1d9dd' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\kemu.tpl',
      1 => 1479828961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5328583465e2dbddb0_21247087',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'zh' => 0,
    'mm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583465e2e3f815_91631422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583465e2e3f815_91631422')) {
function content_583465e2e3f815_91631422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5328583465e2dbddb0_21247087';
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
    text-align:center;
    font-size: 50px;
}
#div1{
        margin: 0 auto;
    width: 300px;
    text-align: center;
}
#tb1{
    margin-left: 70px;
    margin-bottom: 10px;
}
.b{
    margin-bottom: 10px;
}
.c{
        width:200px;
height:30px;
margin:10px;
font-size: 20px;
}
</style>
<body>
<h1>科目信息管理</h1>
<div id="div1">
  <form name="form6" action="k_insertdo.php" method="post">
  增加科目<input type="text" name="nkm"><input type="submit" value="确认" class="b">
    <table border="1" id="tb1">
    <tr><td>科目ID</td><td>科目名称</td><td>删除</td></tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
   <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['km_name'];?>
</td><td><a href="k_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return del()">删除</a></td></tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    </table>
    </form>
    <input class="c" type="button" value="返回" onclick="location='logindo.php?zh=<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
&mm=<?php echo $_smarty_tpl->tpl_vars['mm']->value;?>
'">

    </div>
</body>

    <?php echo '<script'; ?>
>
function del(){
    if(confirm("确定要删除吗？")){
        alert('删除成功！');
        return true;
    }else{
        return false;
    }
}
<?php echo '</script'; ?>
>
</html><?php }
}
?>