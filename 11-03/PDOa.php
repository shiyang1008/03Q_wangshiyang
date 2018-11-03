<?php
class PDOa{
	//public $host;//主机名
	// public $user;//用户名
	// public $pwd;//密码
	// public $dbname;
	public $pdo;

	function __construct()
	{
		
		$this->pdo = new PDO("mysql:host=localhost;dbname=text","root","root");
		
	}

	function add($data,$table)
	{
		$key = implode(",",array_keys($data));
		$value = implode(",:",array_keys($data));

		$keys = array_keys($data);
		$values = array_values($data);
		//PDO拼接 添加SQL语句   防注入
		$sql = "insert into $table($key) values(:$value)";
		$st = $this->pdo->prepare($sql);
		//循环处理赋值
		foreach ($keys as $k => $v) {
			$st->bindParam(":$v",$values[$k]);
		}
		//预处理执行
		$res = $st->execute();
		return $res;
	}

	function select($table)
	{
		$sql = "select * from $table order by id asc";
		$res = $this->pdo->query($sql);
		$data = $res->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}


	function delete($table,$id,$value)
	{
		$sql = "delete from $table where $id = '$value'";
		$this->pdo->exec($sql);
	}

	function save($table,$keys,$values,$id,$ids)
	{   
		$sql = "update $table set $keys = '$values' where $id = '$ids'";
		$this->pdo->exec($sql);
	}
    function content($id,$table){
    	header("content-type:text/html;charset=utf8");
		$dsn="mysql:host=127.0.0.1;dbname=text";
		$db=new PDO($dsn,'root','root');
		$sql = "select * from $table where(id='$id')";
		$res=$db->query($sql);
		$data=$res->fetch();
		$num=$data['num']-1;
		$ser=$db->exec("update $table set num='$num' where(id='$id')");
	    		if ($ser) {
			return  '<script>alert("抢票成功!");location.href="show.php"</script>';
		}else{
			return "抢票失败";
		}
        
	}
}






