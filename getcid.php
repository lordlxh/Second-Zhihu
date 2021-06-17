<?php
$qid=$_GET["qid"];
$connect=mysqli_connect("localhost","root","","question");
$sql="SELECT cid FROM comment WHERE qid=$qid";
$data=array();
$c=mysqli_query($connect,$sql);
			while ($row=mysqli_fetch_assoc($c)) {
				$data[]=$row['cid'];
			}
			echo "$data[0]";
mysqli_close($connect);
?>