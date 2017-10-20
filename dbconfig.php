<?php

$mysql_hostname = '';
$mysql_username = 'root';
$mysql_password = '';
$mysql_database = '';
$mysql_port = '3306';
$mysql_charset = 'utf8';
$ip=$_SERVER['REMOTE_ADDR'];

$link=mysqli_connect($mysql_hostname,$mysql_username,$mysql_password,$mysql_database);

if (!$link)
{
    echo "MySQL 접속 에러 : ";
    echo mysqli_connect_error();
    exit();
}

mysqli_query($link, "set session character_set_connection=utf8;");
mysqli_query($link, "set session character_set_results=utf8;");
mysqli_query($link, "set session character_set_client=utf8;");
$search = mysqli_query($link,"SELECT * from ipTable WHERE `ip`='$ip'");

if(mysqli_num_rows($search) == 0)
    mysqli_query($link, "INSERT into ipTable (`ip`,`count`) VALUE ('$ip',0)");
$time = date("H");



?>
