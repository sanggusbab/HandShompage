"use strict";

// 슬라이크 전체 크기(width 구하기)
var slide = document.querySelector(".slide");
var slideWidth = slide.clientWidth; // 버튼 엘리먼트 선택하기

var prevBtn = document.querySelector(".slide_prev_button");
var nextBtn = document.querySelector(".slide_next_button");
var contBtn = document.querySelector(".slide_control_button"); // 슬라이드 전체를 선택해 값을 변경해주기 위해 슬라이드 전체 선택하기

var slideItems = document.querySelectorAll(".slide_item"); // 현재 슬라이드 위치가 슬라이드 개수를 넘기지 않게 하기 위한 변수

var maxSlide = slideItems.length; // 버튼 클릭할 때 마다 현재 슬라이드가 어디인지 알려주기 위한 변수

var currSlide = 1; // 무한 슬라이드를 위해 start, end 슬라이드 복사하기

var startSlide = slideItems[0];
var endSlide = slideItems[slideItems.length - 1]; // 엘리먼트 생성

var startElem = document.createElement(startSlide.tagName);
var endElem = document.createElement(endSlide.tagName); // 엘리먼트에 클래스 적용 동일하게 하기

endSlide.classList.forEach(function (c) {
  return endElem.classList.add(c);
});
endElem.innerHTML = endSlide.innerHTML;
startSlide.classList.forEach(function (c) {
  return startElem.classList.add(c);
});
startElem.innerHTML = startSlide.innerHTML; // 각 복제한 엘리먼트를 각 위치에 추가하기

slideItems[0].before(endElem);
slideItems[slideItems.length - 1].after(startElem); // 슬라이드 전체를 선택해 값을 변경해주기 위해 슬라이드 전체 선택하기

slideItems = document.querySelectorAll(".slide_item");
var offset = slideWidth * currSlide;
slideItems.forEach(function (i) {
  i.setAttribute("style", "left: ".concat(-offset, "px"));
});

function nextMove() {
  currSlide++; // 마지막 슬라이드 이상으로 넘어가지 않게 하기 위해서

  if (currSlide <= maxSlide) {
    // 슬라이드를 이동시키기 위한 offset 계산
    var _offset = slideWidth * currSlide; // 각 슬라이드 아이템의 left에 offset 적용


    slideItems.forEach(function (i) {
      i.setAttribute("style", "left: ".concat(-_offset, "px"));
    });
  } else {
    // 무한 슬라이드 기능 - currSlide 값만 변경해줘도 되지만 시각적으로 자연스럽게 하기 위해 아래 코드 작성
    currSlide = 0;

    var _offset2 = slideWidth * currSlide;

    slideItems.forEach(function (i) {
      i.setAttribute("style", "transition: ".concat(0, "s; left: ", -_offset2, "px"));
    });
    currSlide++;
    _offset2 = slideWidth * currSlide; // 각 슬라이드 아이템의 left에 offset 적용
    // setTimeout을 사용하는 이유는 비동기 처리를 이용해 transition이 제대로 적용되게 하기 위함

    setTimeout(function () {
      // 각 슬라이드 아이템의 left에 offset 적용
      slideItems.forEach(function (i) {
        i.setAttribute("style", "transition: ".concat(2, "s; left: ", -_offset2, "px"));
      });
    }, 0);
  }
}

function prevMove() {
  currSlide--; // 1번째 슬라이드 이하로 넘어가지 않게 하기 위해서

  if (currSlide > 0) {
    // 슬라이드를 이동시키기 위한 offset 계산
    var _offset3 = slideWidth * currSlide; // 각 슬라이드 아이템의 left에 offset 적용


    slideItems.forEach(function (i) {
      i.setAttribute("style", "left: ".concat(-_offset3, "px"));
    });
  } else {
    // 무한 슬라이드 기능 - currSlide 값만 변경해줘도 되지만 시각적으로 자연스럽게 하기 위해 아래 코드 작성
    currSlide = maxSlide + 1;

    var _offset4 = slideWidth * currSlide; // 각 슬라이드 아이템의 left에 offset 적용


    slideItems.forEach(function (i) {
      i.setAttribute("style", "transition: ".concat(0, "s; left: ", -_offset4, "px"));
    });
    currSlide--;
    _offset4 = slideWidth * currSlide;
    setTimeout(function () {
      // 각 슬라이드 아이템의 left에 offset 적용
      slideItems.forEach(function (i) {
        // i.setAttribute("style", `transition: ${0}s; left: ${-offset}px`);
        i.setAttribute("style", "transition: ".concat(2, "s; left: ", -_offset4, "px"));
      });
    }, 0);
  }
} // 버튼 엘리먼트에 클릭 이벤트 추가하기


nextBtn.addEventListener("click", function () {
  // 이후 버튼 누를 경우 현재 슬라이드를 변경
  nextMove();
}); // 버튼 엘리먼트에 클릭 이벤트 추가하기

prevBtn.addEventListener("click", function () {
  // 이전 버튼 누를 경우 현재 슬라이드를 변경
  prevMove();
}); // 브라우저 화면이 조정될 때 마다 slideWidth를 변경하기 위해

window.addEventListener("resize", function () {
  slideWidth = slide.clientWidth;
}); // 드래그(스와이프) 이벤트를 위한 변수 초기화

var startPoint = 0;
var endPoint = 0; // PC 클릭 이벤트 (드래그)

slide.addEventListener("mousedown", function (e) {
  startPoint = e.pageX; // 마우스 드래그 시작 위치 저장
});
slide.addEventListener("mouseup", function (e) {
  endPoint = e.pageX; // 마우스 드래그 끝 위치 저장

  if (startPoint < endPoint) {
    // 마우스가 오른쪽으로 드래그 된 경우
    prevMove();
  } else if (startPoint > endPoint) {
    // 마우스가 왼쪽으로 드래그 된 경우
    nextMove();
  }
}); // 기본적으로 슬라이드 루프 시작하기

var loopInterval = setInterval(function () {
  nextMove();
}, 6000);
var buttonStop = document.querySelector(".buttonStop");
var buttonReplay = document.querySelector(".buttonReplay");
var stopStatus = false;
contBtn.addEventListener("click", function () {
  if (stopStatus == false) {
    buttonStop.setAttribute("style", 'opacity: 0');
    buttonReplay.setAttribute("style", 'opacity: 1');
    clearInterval(loopInterval);
    stopStatus = true;
  } else {
    buttonStop.setAttribute("style", 'opacity: 1');
    buttonReplay.setAttribute("style", 'opacity: 0');
    loopInterval = setInterval(function () {
      nextMove();
    }, 6000);
    stopStatus = false;
  }

  console.log(stopStatus);
});
//# sourceMappingURL=slide.dev.js.map
