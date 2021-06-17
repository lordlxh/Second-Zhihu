<?php //登录
	function safe_input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$uname=safe_input($_POST['uname']);
	$pword=safe_input($_POST['pword']);
	$connect=mysqli_connect("localhost","root","");
	if(!$connect){
		die('Could not connect: ' . mysqli_error($connect));
	}
	if(!mysqli_select_db($connect,"yongHu")){//如果数据库不存在
		echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名不存在1');window.location.href = 'http://localhost/secondzhihu/denglu.html';</script>";
	}
		$data=array();$biao=mysqli_query($connect,"show tables;");
		while($row=mysqli_fetch_assoc($biao)){
		$data+=$row;
		}unset($biao,$row);
		if(!in_array(strtolower("zhangHao"), $data)){//如果账号列表不存在
			echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名不存在2');window.location.href = 'http://localhost/secondzhihu/denglu.html';</script>";
		}
		else{
			$data=array();$yongHuMing=mysqli_query($connect,"SELECT uname FROM zhangHao");
			while ($row=mysqli_fetch_assoc($yongHuMing)) {
				$data[]=$row['uname'];
			}unset($yongHuMing,$row);//print_r($data);//取出所有用户名
			if(!in_array("$uname",$data)){unset($data);
				echo "<script  language = 'javascript' type = 'text/javascript'>alert('用户名不存在3');window.location.href = 'http://localhost/secondzhihu/denglu.html';</script>";
			}
			else{
				$pworddata=mysqli_query($connect,"SELECT pword FROM zhangHao WHERE uname='$uname'");
				$pworddata=mysqli_fetch_assoc($pworddata);
				if($pword!==$pworddata["pword"]){print_r($pworddata);unset($pworddata);
					echo "密码错误";
				}
				else{
					$url="http://localhost/secondzhihu/index1.php?uname=".$uname;
					echo " <script  language = 'javascript' type = 'text/javascript'> ";
					echo " window.location.href = '$url' ";
					echo " </script> ";
				}
			}
		}
	mysqli_close($connect);
?>
