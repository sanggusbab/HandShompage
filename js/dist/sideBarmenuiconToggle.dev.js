"use strict";

$(document).ready(function () {
  var Box1tf = false;
  var Box2tf = false;
  var Box3tf = false;
  var Box4tf = false;
  $('#sideBarmenuicon').click(function () {
    if ($('#sideBarmenuicon').is(":checked") == true) {
      $('#depthList01').slideDown();
      $('#depthList02').slideDown();
      $('#depthList03').slideDown();
      $('#depthList04').slideDown();
      Box1tf = true;
      Box2tf = true;
      Box3tf = true;
      Box4tf = true;
    } else {
      $('#depthList01').slideUp();
      $('#depthList02').slideUp();
      $('#depthList03').slideUp();
      $('#depthList04').slideUp();
      Box1tf = false;
      Box2tf = false;
      Box3tf = false;
      Box4tf = false;
    }
  });
  $('.boxTag01').click(function () {
    if (Box1tf == false) {
      $('#depthList01').slideDown();
      Box1tf = true;
    } else {
      $('#depthList01').slideUp();
      Box1tf = false;
    }
  });
  $('.boxTag02').click(function () {
    if (Box2tf == false) {
      $('#depthList02').slideDown();
      Box2tf = true;
    } else {
      $('#depthList02').slideUp();
      Box2tf = false;
    }
  });
  $('.boxTag03').click(function () {
    if (Box3tf == false) {
      $('#depthList03').slideDown();
      Box3tf = true;
    } else {
      $('#depthList03').slideUp();
      Box3tf = false;
    }
  });
  $('.boxTag04').click(function () {
    console.log('helloworld');
    console.log($('#Box4'));

    if (Box4tf == false) {
      console.log('helloworld2');
      $('#depthList04').slideDown();
      Box4tf = true;
    } else {
      console.log('helloworld3');
      $('#depthList04').slideUp();
      Box4tf = false;
    }
  });
});
//# sourceMappingURL=sideBarmenuiconToggle.dev.js.map
