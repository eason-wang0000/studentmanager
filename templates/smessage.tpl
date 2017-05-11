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
    <{foreach from = $arr  item = "v"}>

 <tr>
 <td><{$v['xh']}></td>
 <td><{$v['xm']}></td>
 <td><{if $v['sex'] eq 0}>男<{/if}><{if $v['sex'] eq 1}>女<{/if}></td>
 <td><{$v['bj']}></td>
 <td><a href="s_updatedo.php?xh=<{$v['xh']}>&xm=<{$v['xm']}>&sex=<{$v['sex']}>&bj=<{$v['bj']}>">修改</a></td>
 <td><a href="s_deletedo.php?xh=<{$v['xh']}>" onclick="return del()">删除</a></td></tr>
  <{/foreach}>

        </table>
     <input class="b" type="button" value="返回" onclick="location='logindo.php?zh=<{$zh}>&mm=<{$mm}>'">
    </form>

</div>
    <script>
function del(){
    if(confirm("确定要删除吗？")){
        alert('删除成功！');
        return true;
    }else{
        return false;
    }
}
</script>
</body>
</html>