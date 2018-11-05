<?php

   function __autoload($class){
         require "$class.php";
   }

   $obj = new PDOq();

   $data = $_POST;
   $res = $obj->add($data,"wang");
   // print_r($res);die;
   if($res){
   	   echo "<script>alert('添加成功');location.href='show.php'</script>";
   }else{
   	echo "<script>alert('添加失败');location.href='add.php'</script>";
   }