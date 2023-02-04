<?php
$host = "localhost";
$user = "default";
$password = "@elvhfxmrlqhstkdydwk!23";
$dbName = "handsdb";

if ($this->dbConnection == null) {
    $this->dbConnection = new mysqli($host, $user, $password, $dbName);
    $this->dbConnection->set_charset("utf8");
}
?>
