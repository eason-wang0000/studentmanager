<?php /* Smarty version 3.1.27, created on 2016-11-21 13:55:32
         compiled from "C:\wamp\www\Student\templates\cxh.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189475832fcd4bd1d09_08164609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd1314c353cc8bfb63efe57264230e746b17a01' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\cxh.tpl',
      1 => 1479736333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189475832fcd4bd1d09_08164609',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5832fcd4c740e7_62338539',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5832fcd4c740e7_62338539')) {
function content_5832fcd4c740e7_62338539 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '189475832fcd4bd1d09_08164609';
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
<body>
     <table border="1">
    <tr><td>学号</td><td>姓名</td><td>性别</td><td>班级</td><td>修改</td><td>删除</td></tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["v"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["v"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars["v"];
?>
 <tr>
 <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td>
 <td><?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 0) {?>男<?php }
if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 1) {?>女<?php }?></td>
 <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bj'];?>
</td>
 <td><a href="s_updatedo.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
&xm=<?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
&sex=<?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
&bj=<?php echo $_smarty_tpl->tpl_vars['v']->value['bj'];?>
">修改</a></td>
 <td><a href="s_deletedo.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
" onclick="return del()">删除</a></td></tr>
  <?php
$_smarty_tpl->tpl_vars["v"] = $foreach_v_Sav;
}
?>

        </table>
 <input type="button" value="返回" onclick="location='smessagedo.php'">

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
</body>
</html><?php }
}
?>