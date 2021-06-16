<?php
$host = "localhost";
$user = "root";
$password = "";
$connect = mysqli_connect($host, $user, $password) or die("mysql 서버 접속 에러");
$db = mysqli_select_db($connect, 'apm_db');
mysqli_select_db($connect, 'apm_db') or die("DB 접속 에러");