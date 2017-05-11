<?php
    $selpath = str_replace('\\','/',dirname(__FILE__)).'/';  //获取init.inp.php所在的目录
    define('ROOT',$selpath);
    include_once(ROOT.'libs/Smarty.class.php');
    $smarty =new Smarty();
    $smarty->left_delimiter='<{';
    $smarty->right_delimiter='}>';
    $smarty->template_dir = ROOT.'templates/';
    $smarty->compile_dir = ROOT.'templates_c/';   
?>