<?php

   function __autoload($class){
         require "$class.php";
   }

   $obj = new PDOq();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	     <form action="add_do.php" method="post">
	     	
	     	<table>
	     		 <tr>
	     		 	<td>标题</td>
	     		 	<td><input type="text" name="tatle"></td>
	     		 </tr>
	     		 <tr>
	     		 	<td>分类</td>
	     		 	<td>
	     		 		<input type="text" name="fen">
	     		 	</td>
	     		 </tr>
	     		 <tr>
	     		 	<td>描述</td>
	     		 	<td><input type="text" name="miao"></td>
	     		 </tr>
	     		 <tr>
	     		 	<td colspan="2" align="center"> <input type="submit" value="添加"></td>
	     		 </tr>
	     	</table>
	     </form>
</body>
</html>
