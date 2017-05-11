<?php /* Smarty version 3.1.27, created on 2016-11-21 15:42:43
         compiled from "C:\wamp\www\Student\templates\allchengji.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24540583315f3dee989_53105551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271729c660565315af809ab9154a9f9536f9c02c' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\allchengji.tpl',
      1 => 1479742948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24540583315f3dee989_53105551',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583315f3e6a847_06269113',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583315f3e6a847_06269113')) {
function content_583315f3e6a847_06269113 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24540583315f3dee989_53105551';
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
    
    <form action="chengjido1.php" method="post">

    <table border="1">

    <tr><td>学号</td><td>姓名</td><td>科目</td><td>成绩</td></tr>

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
      <input type="hidden" name="axh[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
"> 

     <input type="hidden" name="kna[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['km_id'];?>
"> 
    <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['km_name'];?>
</td><td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
" name="ncj[]"></td></tr>
     <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
     </table>
     <input type="submit" value="确认修改" name="gai">
     <input type="button" value="返回" onclick="location='chengjido.php'">
     </form>
</body>
</html><?php }
}
?>