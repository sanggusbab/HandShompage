"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var UploadAdapter =
/*#__PURE__*/
function () {
  function UploadAdapter(loader) {
    _classCallCheck(this, UploadAdapter);

    this.loader = loader;
  }

  _createClass(UploadAdapter, [{
    key: "upload",
    value: function upload() {
      var _this = this;

      return this.loader.file.then(function (file) {
        return new Promise(function (resolve, reject) {
          _this._initRequest();

          _this._initListeners(resolve, reject, file);

          _this._sendRequest(file);
        });
      });
    }
  }, {
    key: "_initRequest",
    value: function _initRequest() {
      var xhr = this.xhr = new XMLHttpRequest();
      xhr.open('POST', 'https://localhost:8000/uploadFileMamagement', true);
      xhr.responseType = 'json';
    }
  }, {
    key: "_initListeners",
    value: function _initListeners(resolve, reject, file) {
      var xhr = this.xhr;
      var loader = this.loader;
      var genericErrorText = '파일을 업로드 할 수 없습니다.';
      xhr.addEventListener('error', function () {
        reject(genericErrorText);
      });
      xhr.addEventListener('abort', function () {
        return reject();
      });
      xhr.addEventListener('load', function () {
        var response = xhr.response;

        if (!response || response.error) {
          return reject(response && response.error ? response.error.message : genericErrorText);
        }

        resolve({
          "default": response.url //업로드된 파일 주소

        });
      });
    }
  }, {
    key: "_sendRequest",
    value: function _sendRequest(file) {
      var data = new FormData();
      data.append('upload', file);
      this.xhr.send(data);
    }
  }]);

  return UploadAdapter;
}();

function MyCustomUploadAdapterPlugin(editor) {
  editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
    return new UploadAdapter(loader);
  };
}
//# sourceMappingURL=uploadAdapter.dev.js.map
