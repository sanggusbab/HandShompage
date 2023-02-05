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
        $username = trim($_POST['membername']);

        // 한글 또는 영문으로 구성되어 있는지 확인
        if (!preg_match('/^[a-zA-Z가-힣]+$/', $username)) {
            echo '올바른 이름이 아닙니다.';
            exit;
        }

        // 이메일 주소의 앞 뒤 공백 삭제
        $useremail = trim($_POST['useremail']);


        //메일 유효성 체크
        if (!filter_Var($useremail, FILTER_VALIDATE_EMAIL)) {
            echo '올바른 이메일이 아닙니다.';
            exit;
        }

        //비밀번호
        $userpw = $_POST['userpw'];

        //비밀번호가 공백인지 확인
        if ($userpw == '') {
            echo '비밀번호 값이 공백입니다.';
            exit;
        }

        //비밀번호  암호화
        $userpw = sha1('mySalt' . $userpw);

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
        $birthMonth = (int) $_POST['birthMonth'];
        if ($birthMonth == '') {
            echo '생월 값이 빈값입니다.';
            exit;
        }
        //올바른 값을 입력했는지 확인
        $birthMonthCheck = false;
        for ($i = 1; $i <= 12; $i++) {
            if ($i == $birthMonth) {
                $birthMonthCheck = true;
                break;
            }
        }

        if ($birthMonthCheck == false) {
            echo '올바른 생월 값이 아닙니다.';
            exit;
        }

        //생일 숫자(정수)로 형변환
        $birthDay = (int) $_POST['birthDay'];
        if ($birthDay == '') {
            echo '생일 값이 빈값입니다.';
            exit;
        }

        //올바른 값을 입력했는지 확인
        $birthDayCheck = false;
        for ($i = 1; $i <= 31; $i++) {
            if ($i == $birthDay) {
                $birthDayCheck = true;
                break;
            }
        }

        if ($birthDayCheck == false) {
            echo '올바른 값이 아닙니다.';
            exit;
        }

        //데이터베이스에 입력할 값으로 변경
        $birth = $birthYear . '-' . $birthMonth . '-' . $birthDay;

        //성별 검사
        $gender = $_POST['gender'];

        //값이 m이거나 w인지 확인
        $genderCheck = false;

        switch ($gender) {
            case 'm':
            case 'w':
                $genderCheck = true;
                break;
        }

        if($genderCheck == false){
            echo '올바른 성별 정보가 아닙니다.';
            exit;
        }

        //여기까지 오면 입력받은 정보 모두 검증 완료

        //이름 정보를 real_escape_string 처리
        //데이터베이스 입력 정보가 필요하므로 정보를 담고 있는 dbConnection 메소드 호출
        $this->dbConnection();
        $username = $this->dbConnection->real_escape_string($username);

        //기본 프로필 사진 주소 설정
        $profilePhoto = '';
        if($gender == 'm'){
            $profilePhoto = './images/default/boy.png';
        }
        else if($gender == 'w'){
            $profilePhoto = './images/default/girl.png';
        }

        //회원가입 시간
        $regtime = time();

        //데이터베이스에 입력
        $sql = "INSERT INTO handsdb(username, email, pw, birthday, gender, profilephoto, regtime) ";
        $sql .= "VALUES('{$username}', '{$useremail}', '{$userpw}','{$birth}','{$gender}','{$profilePhoto}','{$regtime}'";
        $res = $this->dbConnection->query($sql);

        //쿼리 질의 성공 시
        if($res){
            //나중에 이곳에 회원가입 로그 만듦

            //회원가입에 성공했으므로 세션 생성
            $_SESSION['handsHomeSession']['email'] = $useremail;
            $_SESSION['handsHomeSession']['username'] = $username;
            //insert_id는 입력한 정보의 primary key 반환
            $_SESSION['handsHomeSession']['mymemberid'] = $this->dbConnection->insert_id;
            $_SESSION['handsHomeSession']['profilePhoto'] = $profilePhoto;
        }
        else{
            echo "<script>alert('실패'); location.href = '../index.php';</script>";
            exit;
        }
    }
    //이메일 중복 체크 메소드
    function emailCheck($memberemail)
    {
        $memberemail = '';
        if ($memberemail == 'm') {
            $memberemail = './images/default/boy.png';
        } else if ($memberemail == 'w') {
            $memberemail = './images/default/girl.png';
        }
    }
    function photoSave()
    {
        $memberemail = '';
        if ($memberemail == 'm') {
            $memberemail = './images/default/boy.png';
        } else if ($memberemail == 'w') {
            $memberemail = './images/default/girl.png';
        }
    }
}
$handsdb = new handsdb;
?>

