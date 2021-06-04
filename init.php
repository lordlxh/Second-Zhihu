<?php
//data/init.php
//创建到服务器的连接，连接数据库
$conn=mysqli_connect("127.0.0.1","root","","computer_practice",3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);