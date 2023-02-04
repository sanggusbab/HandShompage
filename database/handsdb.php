<?php
class handsdb
{
    // 데이터베이스 접속 정보를 대입할 프로퍼티
    protected $dbConnection = null;

    //mode
    protected $mode;
    //데이터베이스 접속 정보를 가져오는 메소드
    protected function dbConnection()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/connect/connect.php';
    }

    //생성자
    function __construct()
    {
        //mode값에 따라 메소드 호출
        if (isset($_POST['mode'])) {
        }
    }
}
?>
