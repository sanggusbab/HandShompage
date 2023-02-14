<div style="margin-top:50px;">
	저는 스터디를 등록하는 게시판입니다.
</div>
<div data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false" style="margin-top:50px;">
	<div class="centered">
		<div class="row row-editor">
			<div class="editor-container" style="width: 1158px;">
				<div class="editor">

				</div>
			</div>
		</div>
	</div>
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