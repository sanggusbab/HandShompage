<?php
class handsdb
{
    // 데이터베이스 접속 정보를 대입할 프로퍼티
    protected $dbConnection = null;

    // mode
    protected $mode;
    // 데이터베이스 접속 정보를 가져오는 메소드
    protected function dbConnection()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/connect/connect.php';
    }

    // 생성자
    function __construct()
    {
        // mode값에 따라 메소드 호출
        if (isset($_POST['mode'])) {
            $this->mode =  $_POST['mode'];
            // mode의 값에 따라 메소드 호출
            if ($this->mode == 'emailCheck') {
                $this->emailCheck($_POST['userEmail']);
            } else if ($this->mode == 'save') {
                $this->signUp();
            } else if ($this->mode == 'photo') {
                $this->photoSave();
            }
        }
    }

    // 회원가입(회원 정보 저장) 메소드
    function signUp()
    {
        // 이름의 닾뒤 공백 삭제
        $membername = trim($_POST['membername']);

        // 한글 또는 영문으로 구성되어 있는지 확인
        if (!preg_match('/^[a-zA-Z가-힣]+$/', $membername)) {
            echo '올바른 이름이 아닙니다.';
            exit;
        }

        // 이메일 주소의 앞 뒤 공백 삭제
        $userEmail = trim($_POST['userEmail']);

        // 이메일 유효성 체크
        if (!filter_Var($userEmail, FILTER_VALIDATE_EMAIL)) {
            echo '올바른 이메일이 아닙니다.';
            exit;
        }

        //비밀번호
        $userPw = $_POST['userPw'];

        //비밀번호가 공백인지 확인
        if ($userPw == '') {
            echo '비밀번호 값이 공백입니다.';
            exit;
        }

        //비밀번호  암호화
        $userPw = sha1('mySalt' . $userPw);

        //생년 숫자(정수)로 형변환
        $birthYear = (int) $_POST['birthYear'];

        //빈값인지 확인
        if ($birthYear == '') {
            echo '생년 값이 빈값입니다.';
            exit;
        }

        //올바른 값을 입력했는지 확인
        $birthYearCheck = false;
        //올해의년도
        $thisYear = date('Y', time());
        for ($i = 1900; $i <= $thisYear; $i++) {
            //입력받은 생년월일이 일치하면 정상값
            if ($i == $birthYear) {
                $birthYearCheck = true;
                break;
            }
        }

        if ($birthYearCheck == false) {
            echo '올바른 생년 값이 아닙니다.';
            exit;
        }

        //생월 숫자(정수)로 형변환
        
    }
    //이메일 중복 체크 메소드
    function emailCheck($memberemail)
    {
    }
    function photoSave()
    {
    }
}
$handsdb = new handsdb;
?>
