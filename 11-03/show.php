<?php 

function __autoload($class){
	
	require "$class.php";
}
$obj = new PDoa();
$data = $obj->select("city");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	<table border="1">
		<tr>
			<td>出发地</td>
			<td>目的地</td>
			<td>票数</td>
			<td></td>
		</tr>
		<?php foreach ($data as $key => $value){?>
		<tr>
			<td><?php echo $value['city'] ?></td>
			<td><?php echo $value['city1'] ?></td>
			<td><?php echo $value['num'] ?></td>
			<td><?php if ($value['num']>0): ?>
	 				<a href="update.php?id=<?php  echo $value['id']?>">抢票</a>
	 			<?php endif ?>
				<?php if ($value['num']<=0): ?>
					<a href="#" style="color:#ccc">已售完</a>
				<?php endif ?></td>
		</tr>
		<?php } ?>
		
	</table><a href="index.php">添加</a></center>
</body>
<html>
