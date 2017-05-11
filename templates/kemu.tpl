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
    <{foreach  $arr as $v}>
   <tr><td><{$v['id']}></td><td><{$v['km_name']}></td><td><a href="k_delete.php?id=<{$v['id']}>" onclick="return del()">删除</a></td></tr>
    <{/foreach}>
    </table>
    </form>
    <input class="c" type="button" value="返回" onclick="location='logindo.php?zh=<{$zh}>&mm=<{$mm}>'">

    </div>
</body>

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
</html>