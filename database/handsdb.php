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
            $this->mode =  $_POST['mode'];
            //mode의 값에 따라 메소드 호출
            if($this->mode == 'emailCheck'){
                $this->emailCheck($_POST['userEmail']);
            }else if($this->mode == 'save'){
                $this->signUp();
            }else if($this->mode == 'photo'){
                $this->photoSave();
            }
        }
    }

    //회원가입(회원 정보 저장) 메소드
    function signUp(){

    }
    //이메일 중복 체크 메소드
    function emailCheck($email){

    }
    function photoSave(){

    }
}
$handsdb = new handsdb;
?>
