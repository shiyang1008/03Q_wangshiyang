<?php

   function __autoload($class){
         require "$class.php";
   }

   $obj = new PDOq();
   $id = $_GET;
   var_dump($id);die;
   $data = $obj->del($id,'wang');

?>