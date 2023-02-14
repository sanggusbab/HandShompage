<div style="margin-top:50px;">
	저는 스터디를 등록하는 게시판입니다.
</div>
<div data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false" style="margin-top:50px;">
	<form method='post' action=''>
		<div class="centered">
			<div class="row row-editor">
				<div class="editor-container" style="width: 1158px;">
					<div class="editor">

					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center">
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</div>
	</form>
</div>
<script src="./js/ckeditor.js"></script>
<script>
	const watchdog = new CKSource.EditorWatchdog();

	window.watchdog = watchdog;

	watchdog.setCreator((element, config) => {
		return CKSource.Editor
			.create(element, config)
			.then(editor => {
				return editor;
			})
	});
	watchdog.setDestructor(editor => {
		return editor.destroy();
	});
	watchdog.on('error', handleError);
	watchdog
		.create(document.querySelector('.editor'), {
			licenseKey: '',
		})
		.catch(handleError);

	function handleError(error) {
		console.error('Oops, something went wrong!');
		console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
		console.warn('Build id: ayt95fwd64yv-l8kgf43xn3t');
		console.error(error);
	}
</script>
<div id="writeEditor" style="display: none;"></div>
<script>
	let editor;

	ClassicEditor
		.create(document.querySelector('#writeEditor'), {
			ckfinder: {
				uploadUrl: 'http://localhost:8123/admin/test/imageUpload'
			}
		})
		.then(newEditor => {
			editor = newEditor;
		})

		.then(editor => {
			window.editor = editor;

		})
		.catch(error => {
			console.error('Oops, something went wrong!');
			console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
			console.warn('Build id: g64ljk55ssvc-goqlohse75uw');
			console.error(error);
		});

	// @ResponseBody
	// @RequestMapping("imageUpload")
	// public Map<String, Object> imageUpload(@RequestParam("upload") MultipartFile image) {
	// 	Map<String, Object> data = new HashMap<String, Object>();
	// 	if(image != null) {
	// 		String originalName = image.getOriginalFilename();
	// 		CreateUploadFolderUtil imgSaveFolder = new CreateUploadFolderUtil(image);
	// 		String imgPath = imgSaveFolder.imgSave();

	// 		data.put("uploaded", 1);
	// 		data.put("fileName", originalName);
	// 		data.put("url", "http://localhost:8123" + imgPath);
	// 	}
	// 	return data;
	// }
</script>
<script>
	function uploadData() {
		const editorData = editor.getData();
		console.log(typeof(editorData));

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {

			}
		}
		xhr.open("post", "../test/uploadTest", true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
		xhr.send("editorData=" + editorData);
	}
</script>

<div id="readEditor">
	${uploadFile.test_content }
</div>
<script>
	ClassicEditor
		.create(document.querySelector('#readEditor'))

		.then(editor => {
			window.editor = editor;
			editor.isReadOnly = true;
			const toolbarElement = editor.ui.view.toolbar.element;
			toolbarElement.style.display = 'none';
		})
		.catch(error => {
			console.error('Oops, something went wrong!');
			console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
			console.warn('Build id: g64ljk55ssvc-goqlohse75uw');
			console.error(error);
		});
</script>

<!-- $ftp_server = FTP_IPADDRESS;
$ftp_port = 21;
$ftp_user_name = FTP_LOGIN_ID;
$ftp_user_pass = FTP_LOGIN_PASSWORD;
$ftp_send_file = FTP_FILE_PATH;
$ftp_remote_file = FILE_NAME;

// FTP서버 접속
$conn_id = ftp_connect($ftp_server, $ftp_port);

// FTP서버 접속 실패한 경우
if($conn_id == false){
print_r("[IP:".$ftp_server.":".$ftp_port ."] FTP 서버 접속 실패");
}

// FTP서버 로그인
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// 로그인 실패한 경우
if($login_result == false){
print_r("[IP:".$ftp_server.":".$ftp_port ."], [USER:".$ftp_user_name."] 로그인 실패");
}

// 패시브 모드 설정
ftp_pasv($conn_id, true);

// FTP 서버에 파일 전송
if (ftp_put($conn_id, $ftp_remote_file, $ftp_send_file, FTP_BINARY)) {
print_r("파일 전송 (ftp) -> UPLOAD 성공");
} else {
print_r("파일 전송 (ftp:".$conn_id.",".$ftp_remote_file.",".$ftp_send_file.") -> UPLOAD 실패");
}

// FTP 서버와 연결 끊음
ftp_close($conn_id); 




$ftp_server = FTP_IPADDRESS;
$ftp_port = 21;
$ftp_user_name = FTP_LOGIN_ID;
$ftp_user_pass = FTP_LOGIN_PASSWORD;
$ftp_send_file = FTP_FILE_PATH;
$ftp_remote_file = FILE_NAME;

try{

    // FTP서버 접속
    $conn_id = ftp_connect($ftp_server, $ftp_port);

    // FTP서버 접속 실패한 경우 Exception 처리
    if($conn_id == false){
        throw new Exception("[IP:".$ftp_server.":".$ftp_port ."] FTP 서버 접속 실패");
    }

    // FTP서버 로그인
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

    // FTP서버 로그인 실패한 경우 Exception 처리
    if($login_result == false){
        throw new Exception("[IP:".$ftp_server.":".$ftp_port ."], [USER:".$ftp_user_name."] 로그인 실패");
    }

    // 패시브 모드 설정
    ftp_pasv($conn_id, true);

    // FTP 서버에 파일 전송
    if (ftp_put($conn_id, $ftp_remote_file, $ftp_send_file, FTP_BINARY)) {
        print_r("파일 전송 (ftp) -> UPLOAD 성공");
    } else {
    // FTP서버 파일 전송 실패한 경우 Exception 처리
        throw new Exception("파일 전송 (ftp:".$conn_id.",".$ftp_remote_file.",".$ftp_send_file.") -> UPLOAD 실패");
    }

    // FTP 서버와 연결 끊음
    ftp_close($conn_id);

} catch(Exception $e) {

    // FTP 서버와 연결 끊음
    ftp_close($conn_id);
    print_r($e->getMessage());
}
-->