<?php
$cid=$_GET["cid"];
$connect=mysqli_connect("localhost","root","","question");
$sql="SELECT likes FROM comment WHERE cid=$cid";
$likesdata=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($likesdata);
$data["likes"]--;
$i=$data["likes"];
mysqli_query($connect,"UPDATE comment SET likes=$i WHERE cid=$cid");
echo $i;
mysqli_close($connect);
?>