<?php 
	function safe_input($data){
		$data=trim("$data");
		$data=stripcslashes("$data");
		$data=htmlspecialchars("$data");
		return $data;
	}
	$connect=mysqli_connect("localhost","root","","question");
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
		$data+=$row;
	}unset($biao,$row);
	if(!in_array(strtolower("comment"), $data)){//如果提问列表不存在
		$sql="CREATE TABLE comment(
		cid int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(cid),
		content varchar(1500) DEFAULT NULL,
		time varchar(20) DEFAULT NULL,
		qid int DEFAULT 0,
		likes int DEFAULT 0,
		commenter varchar(20) DEFAULT NULL
		)";
		if(!mysqli_query($connect,$sql)){die('Error creating table: ' . mysqli_error($connect));}
	}unset($data);
	$content=$_GET["content"];
	$time=date('Y-m-d H:i:s');
	$qid=$_GET["qid"];
	$commenter=$_GET["commenter"];
	if($commenter===''||$commenter==='undefined'){
		echo "<script>alert('提交失败，请先登录');window.location.href ='http://localhost/secondzhihu/denglu.html';</script>";
	}
	else{$sql="INSERT INTO comment(content, time, qid,commenter) VALUES ('$content', '$time', '$qid','$commenter')";
	if(!mysqli_query($connect,$sql)){die('Error creating comment: ' . mysqli_error($connect));}}

	mysqli_close($connect);
	$url="http://localhost/secondzhihu/index1.php?uname=".$commenter;
	echo " <script  language = 'javascript' type = 'text/javascript'> ";
	echo " alert('评论提交成功');window.location.href = '$url' ";
	echo " </script> ";

?>