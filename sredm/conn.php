<?php

$conn = new mysqli('127.0.0.1','root','simmon','ruilimdldb');
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 


?>