<?php 
function __autoload($class){
	// print_r($class);die;
	require "{$class}.php";
}
$thiss=new PDOa();
$id=$_GET['id'];
$data=$thiss->content($id,"city");
echo $data;






 ?>