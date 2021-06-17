<?php
$cid=$_GET["cid"];
$connect=mysqli_connect("localhost","root","","question");
$sql="SELECT qid FROM comment WHERE cid=$cid";
$q=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($q);
$qid=$row["qid"];
unset($sql);
$sql="SELECT cid FROM comment WHERE qid=$qid";
$data=array();
$c=mysqli_query($connect,$sql);
			while ($row=mysqli_fetch_assoc($c)) {
				$data[]=$row['cid'];
			}
for($i=0;$i<count($data);$i++){
	if($data[$i]==$cid){
		$j=$i-1;
		if($j>=0){
		echo "&qid=$qid&cid=$data[$j]";
		break;}
		else echo "stupid";
	}
}
mysqli_close($connect);
?>