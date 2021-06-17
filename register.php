<?php  //注册
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
	if(!mysqli_select_db($connect,"yongHu")){//如果数据库不存在
		if(!mysqli_query($connect,"CREATE DATABASE yongHu")){//如果创建失败
			die('Error creating database: ' . mysqli_error($connect));
		}
	}
//数据库存在或不存在但创建成功
	$data=array();$biao=mysqli_query($connect,"show tables;");
	while($row=mysqli_fetch_assoc($biao)){
		$data+=$row;
	}unset($biao,$row);
	if(!in_array(strtolower("zhangHao"), $data)){//如果账号列表不存在
		$sql="CREATE TABLE zhangHao(
		uid int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(uid),
		uname varchar(20),
		pword varchar(15),
		email varchar(20)
		)";
		if(!mysqli_query($connect,$sql)){die('Error creating table: ' . mysqli_error($connect));}
	}unset($data);
//列表存在,注册用户账号信息
	$sign=1;
	$uname=safe_input($_POST["uname"]);
	$pword=safe_input($_POST["pword"]);
	$email=safe_input($_POST["email"]);//var_dump($_POST["uname"]);
	$data=array();$yongHuMing=mysqli_query($connect,"SELECT uname FROM zhangHao");
	while ($row=mysqli_fetch_assoc($yongHuMing)) {
		$data[]=$row['uname'];
	}unset($yongHuMing,$row);//取出所有用户名
	if(in_array($uname,$data)){unset($data);
		echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名已存在'); window.location.href = 'http://localhost/secondzhihu/zhuce.html';</script>";
		$sign=0;
	}
	else{//检测用户名，密码是否合法
		if(strlen($uname)<5){echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名过短');></script>";$sign=0;}if(strlen($uname)>20){echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名过长');></script>";$sign=0;}
		if(strlen($pword)<6){echo "<script  language = 'javascript' type = 'text/javascript'>alert('密码过短');></script>";$sign=0;}if (strlen($pword)>15){echo "<script  language = 'javascript' type = 'text/javascript'>alert('密码过长');></script>";$sign=0;}
	}
	if($sign==1){
		$sql="INSERT INTO zhangHao (uname, pword, email) VALUES ('$uname', '$pword', '$email')";
		if(!mysqli_query($connect,$sql)){die('Error creating zhangHao: ' . mysqli_error($connect));}
	echo "<script  language = 'javascript' type = 'text/javascript'> window.location.href = 'http://localhost/secondzhihu/denglu.html';</script>";}
	mysqli_close($connect);

?>