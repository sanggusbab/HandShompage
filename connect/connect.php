<?php
/* 서버 접속 */
$servername = "hostipaddress";
$user = "default";
$password = "1234";
$dbname = "handsdb";
$connect = mysqli_connect($servername, $user, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($this->dbConnection == null) {
    $this->dbConnection = new mysqli($host, $user, $password, $dbName);
    $this->dbConnection->set_charset("utf8");
}
?>