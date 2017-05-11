<?php /* Smarty version 3.1.27, created on 2016-11-23 07:32:36
         compiled from "C:\wamp\www\Student\templates\chengji.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18337583546140abb68_51462788%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb06563b5750a4067d4fb9bce3f5f487a68e52d3' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\chengji.tpl',
      1 => 1479886352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18337583546140abb68_51462788',
  'variables' => 
  array (
    'zh' => 0,
    'mm' => 0,
    'arr1' => 0,
    'v' => 0,
    'aarr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5835461414e9f5_17445628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835461414e9f5_17445628')) {
function content_5835461414e9f5_17445628 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18337583546140abb68_51462788';
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
    width: 300px;
    
}
.b{
    width:200px;
height:30px;
margin:10px;
font-size: 20px;
}
.c{
    margin-bottom: 10px;
}
</style>
<body> 
<h1>成绩管理系统</h1>
<!-- 查询，修改学生成绩 -->
<div id="div1">
<form name="form7" action="chengjido1.php"method="post">
<input type="button" value="查询所有学生" 
onclick="javascript:window.location.href='chengjido.php?zh=<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
&mm=<?php echo $_smarty_tpl->tpl_vars['mm']->value;?>
'" class="b"
><br/>
    请输入学号<input type="text" name="xh" class="c"><br>
    请选择科目<select name="km" class="c">
 <?php
$_from = $_smarty_tpl->tpl_vars['arr1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['km_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['km_name'];?>
</option>
         <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    </select><br/>
    <input type="submit" value="查询单科" name="xc" class="c">
<input type="submit" value="查询所有的科目" name="qc" class="c">

    <table border="1">

    <tr><td>学号</td><td>姓名</td><td>科目</td><td>修改成绩</td></tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['aarr']->value;
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
</td>

       <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
" name="ncj[]"></td></tr>

     <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
     </table>
      <input type="submit" value="确认修改" name="gai">
      <input type="button" value="返回" onclick="javascript:window.location.href='logindo.php?zh=<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
&mm=<?php echo $_smarty_tpl->tpl_vars['mm']->value;?>
'" >
    </form>

</div>
</body>
</html><?php }
}
?>