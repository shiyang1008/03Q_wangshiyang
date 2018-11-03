<?php 
  function __autoload($class){
       require"$class.php";
  }


  $obj = new PDOa();
  // $data = array("username"=>"zhangsan","pwd"=>"123");
	$data = $_POST;
	// print_r($data);die;
	// $active = $_POST['active'];
	// $d_active = $_POST['d_active'];
	// $ticket = $_POST['ticket'];
	$res = $obj->add($data,"city");
	// var_dump($res);die;
	// $res = mysql_query($sql);
	if($res){
			echo '<script>alert("添加成功");location.href="show.php"</script>';
	}else{
		echo '<script>alert("添加失败");location.href="index.php"</script>';
	}

?>