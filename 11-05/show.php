<?php

   function __autoload($class){
         require "$class.php";
   }

   $obj = new PDOq();

   $data = $obj->select('wang');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	   <table border="1">
	   	
	   	<tr>
	   		<td>序号</td>
	   		<td>标题</td>
	   		<td>分类</td>
	   		<td>描述</td>
	   		<td>操作</td>
	   	</tr>
       <?php foreach($data as $v) {?>
          <tr>
          	<td><?php echo $v['id'] ?></td>
          	<td><?php echo $v['tatle'] ?></td>
          	<td><?php echo $v['fen'] ?></td>
          	<td><?php echo $v['miao'] ?></td>
          	<td><a href="del.php?id=<?php echo $v['id'] ?>">删除</a></td>
          </tr>
      <?php } ?>
	   </table>
</body>
</html> 