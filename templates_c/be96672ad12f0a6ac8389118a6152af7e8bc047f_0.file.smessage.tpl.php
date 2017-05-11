<?php /* Smarty version 3.1.27, created on 2016-11-22 15:28:41
         compiled from "C:\wamp\www\Student\templates\smessage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1433558346429461ee9_43783568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be96672ad12f0a6ac8389118a6152af7e8bc047f' => 
    array (
      0 => 'C:\\wamp\\www\\Student\\templates\\smessage.tpl',
      1 => 1479828519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433558346429461ee9_43783568',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'zh' => 0,
    'mm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583464295145b4_01376886',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583464295145b4_01376886')) {
function content_583464295145b4_01376886 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1433558346429461ee9_43783568';
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
    width: 300px;
    text-align: center;
}
.b{
    width:200px;
height:30px;
margin:10px;
font-size: 20px;
}
#tb1{
      margin-left: 35px;
}
.c{
    margin-bottom: 10px;
}
</style>
<body>

    <h1>学生基本信息管理</h1>
 <!--添加学生 -->
<div id="div1">
    <form name="form4" method="post" action="s_insertdo.php">
    <input type="submit" value="增加学生" class="b" >
   </form>



 <!--显示所有学生 -->
    <form name="form3" method="post" action="cxh.php">
     <input type="submit" value="查询所有学生" name="cba" class='b'><br/>
            请输入学号<input type="text" name="cxh" class='c'>
 <input type="submit" value="查询" name="cb">

    <table border="1" id="tb1">
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
     <input class="b" type="button" value="返回" onclick="location='logindo.php?zh=<?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
&mm=<?php echo $_smarty_tpl->tpl_vars['mm']->value;?>
'">
    </form>

</div>
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