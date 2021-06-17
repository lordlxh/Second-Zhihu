<?php
$qid=$_GET["qid"];
$connect=mysqli_connect("localhost","root","","question");
$sql="SELECT likes FROM question WHERE qid=$qid";
$likesdata=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($likesdata);
$data["likes"]++;
$i=$data["likes"];
mysqli_query($connect,"UPDATE question SET likes=$i WHERE qid=$qid");
echo $i;
mysqli_close($connect);
?>