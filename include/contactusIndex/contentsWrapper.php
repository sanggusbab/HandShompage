<div
    style="position:relative; width:1130px; height:630px; margin:auto; padding: 35px; box-shadow: 0 0 50px rgba(0, 0, 0, 0.8);border-radius: 15px;">
    <div
        style="position: absolute; left: 0px; top:0px; width:500px; height:700px; background-color: #444; float: left; overflow: hidden;border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
        <img src="./images/resource/contactusIndex/contactusLeftImage.jpg" alt="contactusBackground"
            style="width:500px; height:700px; opacity:0.7;">
    </div>
    <div
        style="position: absolute; right: 0px; top:0px; width:700px; height:700px; overflow: hidden;border-top-right-radius: 15px; border-bottom-right-radius: 15px; opacity:0.7">
        <img src="./images/resource/contactusIndex/contactusLeftImage2.jpg" alt="contactusBackground"
            style="width:700px; height:700px; opacity:0.7">
    </div>
    <div
        style="position: absolute; right:35px; width:570px; height:630px; padding: 0 30px;background-color: #fff; box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.7) ;float: right;border-radius: 15px;">
        <div class="rows" style="width: 100%; margin:20px 0; text-align:center; float: left;">
            <p>
                <b style="color: #444; font-size:32px;">Contact Us</b>
            </p>
        </div>
        <div class="rows" style="width: 50%; text-align:left; float: left; margin-bottom:20px;">
            <p style="color: #666; font-size:12px; margin-bottom:6px;">
                &nbsp 이름(First Name)
            </p>
            <input type="text" name="firstName" placeholder="이름을 입력해주세요."
                style="width:200px;height:26px;font-size:14px;">
        </div>
        <div class="rows" style="width: 50%; text-align:left; float: left; margin-bottom:20px;">
            <p style="color: #666; font-size:12px; margin-bottom:6px;">
                &nbsp 성(Last Name)
            </p>
            <input type="text" name="lastName" placeholder="성을 입력해주세요." style="width:200px;height:26px;font-size:14px;">
        </div>
        <div class="rows" style="width: 100%; text-align:left; float: left; margin-bottom:20px;">
            <p style="color: #666; font-size:12px; margin-bottom:6px;">
                &nbsp 이메일(Email)
            </p>
            <input type="text" name="email" placeholder="example@example.korea.ac.kr"
                style="width:450px;height:26px;font-size:14px;">
        </div>
        <div class="rows" style="width: 100%; text-align:left; float: left; margin-bottom:20px;">
            <p style="color: #666; font-size:12px; margin-bottom:6px;"> 
                &nbsp 연락처(Mobile)
            </p>
            <div style="width:100%; height:auto;">
                <input type="text" name="email" placeholder="010"
                    style="display: block; width:120px;height:26px;font-size:14px;text-align:center;float:left;">
                <div
                    style="display: block; width: 30px; height:auto; line-height: 32px; color: #666; font-size:16px; float:left; text-align: center;">
                    -
                </div>

                <input type="text" name="email" placeholder="1234"
                    style="display: block; width:120px;height:26px;font-size:14px;text-align:center;float:left;">
                <div
                    style="display: block; width: 30px; height:auto; line-height: 32px; color: #666; font-size:16px; float:left; text-align: center;">
                    -
                </div>

                <input type="text" name="email" placeholder="5678"
                    style="display: block; width:120px;height:26px;font-size:14px;text-align:center;float:left;">
            </div>
        </div>
        <div class="rows" style="width: 100%; text-align:left; float: left; margin-bottom:20px;">
            <p style="color: #666; font-size:12px; margin-bottom:6px;">
                &nbsp 내용(Message)
            </p>
            <textarea name="message" id="" placeholder="내용을 입력해주세요." style="width:100%; height:200px;"></textarea>
        </div>
        <div class="rows">
            <button type="button" onclick="location.href = './index.php'" id="contactusCommitBtn">
                <p style="font-size:18px;margin:auto;">제 출 하 기</p>
            </button>
        </div>
    </div>
</div>