<?php

    // public $pdo;
class PDOq{
	function __construct(){
		$this->pdo = new PDO("mysql:host=localhost;dbname=text","root","root");
}

	  public function add($data,$table){
	  	// print_r($data);die;
	  	$tatle = $data['tatle'];
        $fen = $data['fen'];
        $miao =$data['miao'];
        $sql = "INSERT INTO $table(`tatle`,`fen`,`miao`) VALUES('$tatle','$fen','$miao')";
        $res = $this->pdo->exec($sql);
        return $res;
}

      public function select($table){
      	$sql = "SELECT * FROM $table";
      	$res = $this->pdo->query($sql);
      	$aa = $res->fetchAll(PDO::FETCH_ASSOC);
      	return $aa;
      }   

	   public function del($id,$table){
	   	$sql = "DELETE FROM $table WHERE id ='$id'";
	   	$res = $this->pdo->exec($sql);
         return $res;
	   }



}
