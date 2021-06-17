<?php 
	function safe_input($data){
		$data=trim("$data");
		$data=stripcslashes("$data");
		$data=htmlspecialchars("$data");
		return $data;
	}
	$connect=mysqli_connect("localhost","root","");
	if(!$connect){
		die('Could not connect: ' . mysqli_error($connect));
	}
	if(!mysqli_select_db($connect,"question")){//如果数据库不存在
		if(!mysqli_query($connect,"CREATE DATABASE question")){//如果创建失败
			die('Error creating database: ' . mysqli_error($connect));
		}
	}
//数据库存在或不存在但创建成功
	$data=array();$biao=mysqli_query($connect,"show tables;");
	while($row=mysqli_fetch_assoc($biao)){
		$data[]=$row;
	}unset($biao,$row);
	if(!in_array(strtolower("question"),$data)){//如果提问列表不存在
		$sql="CREATE TABLE question(
		qid int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(qid),
		main varchar(150) DEFAULT NULL ,
		time varchar(20) DEFAULT NULL,
		likes int DEFAULT 0,
		queser varchar(20) DEFAULT NULL
		)";
		
	}unset($data);
	$main=safe_input($_POST["main"]);
	$time=date('Y-m-d H:i:s');
	$likes=0;
	$queser=safe_input($_POST["queser"]);
	if($queser===''||$queser==='undefined'){
		echo "<script>alert('提交失败，请先登录');window.location.href ='http://localhost/denglu.html';</script>";
	}
	else{$sql="INSERT INTO question (main, time, likes,queser) VALUES ('$main', '$time', '$likes','$queser')";
	if(!mysqli_query($connect,$sql)){die('Error creating zhangHao: ' . mysqli_error($connect));}}

	mysqli_close($connect);
	$url="http://localhost/index1.php?uname=".$queser;
	echo " <script  language = 'javascript' type = 'text/javascript'> ";
	echo " window.location.href = '$url' ";
	echo " </script> ";

?>