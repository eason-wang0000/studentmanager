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
onclick="javascript:window.location.href='chengjido.php?zh=<{$zh}>&mm=<{$mm}>'" class="b"
><br/>
    请输入学号<input type="text" name="xh" class="c"><br>
    请选择科目<select name="km" class="c">
 <{foreach $arr1 as $v}>
        <option value="<{$v['km_name']}>"><{$v['km_name']}></option>
         <{/foreach}>
    </select><br/>
    <input type="submit" value="查询单科" name="xc" class="c">
<input type="submit" value="查询所有的科目" name="qc" class="c">

    <table border="1">

    <tr><td>学号</td><td>姓名</td><td>科目</td><td>修改成绩</td></tr>
    <{foreach $aarr as $v}>
    <input type="hidden" name="axh[]" value="<{$v['xh']}>"> 

     <input type="hidden" name="kna[]" value="<{$v['km_id']}>"> 

       <tr><td><{$v['xh']}></td><td><{$v['xm']}></td><td><{$v['km_name']}></td>

       <td><input type="text" value="<{$v['cj']}>" name="ncj[]"></td></tr>

     <{/foreach}>
     </table>
      <input type="submit" value="确认修改" name="gai">
      <input type="button" value="返回" onclick="javascript:window.location.href='logindo.php?zh=<{$zh}>&mm=<{$mm}>'" >
    </form>

</div>
</body>
</html>