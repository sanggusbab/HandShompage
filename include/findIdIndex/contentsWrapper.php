<div style="width:430px; height:auto; color:black; margin:auto; text-align:left;">
    <input type="button" name="firstName" value="아이디찾기" style="width:120px;height:25px;font-size:12px; font-weight:bold; float:left; text-align:center;">
    <input type="button" name="firstName" value="비밀번호찾기" style="width:120px;height:25px;font-size:12px; font-weight:bold; float:left; text-align:center;">
</div>

<div style="width:430px; height:auto; background-color: rgb(252,252,252,1); color:black; margin:auto; text-align:left; padding:25px 25px 20px; border-radius:10px; border-width:1px; border-color:rgba(225,225,225,1); border-style:solid; clear:both;">
    <div style="clear:both; padding-bottom: 20px; text-align:center;">

        <p>
            <b style="color: #444; font-size:24px;">아이디 찾기</b>
        </p>

    </div>
    <p style="color: #666; font-size:14px; margin-bottom:20px;">
        - 아이디는 가입하신 방법에 따라 초기화하실 수 있습니다. <br>
        - 아이디는 인증하신 매체로 전송됩니다.
    </p>
    <div style="clear:both; padding-bottom: 10px; text-align:left;">
        <input type="radio" name="selectIdOrPw" value="email" checked="checked">
        <label for="email" style="color: #aaa; font-size:14px; color:black;">
            이메일
        </label>
        <span>&nbsp &nbsp &nbsp &nbsp </span>
        <input type="radio" name="selectIdOrPw" value="mobile">
        <label for="mobile" style="color: #aaa; font-size:14px; color:black;">
            휴대폰
        </label>
    </div>
    <div style="clear:both; padding: 5px 0; float:left; margin-bottom:10px;">
        <p style="color: #666; font-size:14px; color:black; margin-bottom:6px;">
            &nbsp 이름
        </p>
        <input type="text" name="firstName" placeholder="LastName+FirstName (ex) hong gildong | 홍길동" style="width:400px;height:35px;font-size:14px; float:left; text-align:left; padding:0 15px; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
    </div>
    <div style="clear:both; padding: 5px 0; float:left; margin-bottom:20px;">
        <p style="color: #666; font-size:14px; color:black; margin-bottom:6px;">
            &nbsp 이메일
        </p>
        <div style="clear:both; padding: 5px 0; float:left;">
            <input type="text" name="firstName" placeholder="example" style="width:180px;height:35px;font-size:14px; float:left; text-align:left; padding: 0 10px; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
            <div style="width:20px;height:35px;font-size:14px; float:left; line-height:35px; text-align:center; color:#666;">@</div>
            <input type="text" name="firstName" placeholder="hands.korea.ac.kr" style="width:180px;height:35px;font-size:14px; float:left; text-align:left; padding: 0 10px; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
        </div>
    </div>
    <div style="clear:both; padding: 5px 0; float:left; margin-bottom:20px; display: none;">
        <div style="clear:both; float:left; margin-bottom: 6px;">
            <span style="color: #666; font-size:14px; color:black;">
                &nbsp 휴대전화&nbsp
            </span>
        </div>
        <input type="text" name="firstName" placeholder="010" style="width:120px;height:35px;font-size:14px; float:left; text-align:center; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
        <div style="width:20px;height:35px;font-size:14px; float:left; line-height:35px; text-align:center; color:#666;">-</div>
        <input type="text" name="firstName" placeholder="1234" style="width:120px;height:35px;font-size:14px;float:left; text-align:center; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
        <div style="width:20px;height:35px;font-size:14px; float:left; line-height:35px; text-align:center; color:#666;">-</div>
        <input type="text" name="firstName" placeholder="5678" style="width:120px;height:35px;font-size:14px;float:left; text-align:center; border-width:1px;  border-color:rgba(160,160,160,1); border-style:solid;">
    </div>
    <div class="signUpBeforeMainButton" style="clear: both; width:100%; height:40px; background-color:rgba(139, 28, 33, 1); color:black; border-radius: 5px; text-align: center;">
        <a href="./index.php" id="signUpBeforeMainCancelButton" role="button" style="font-size:18px; color:white; line-height:40px;">아이디 찾기</a>
    </div>
</div>