!function(a){"use strict";a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=a(this.hash);if(e=e.length?e:a("[name="+this.hash.slice(1)+"]"),e.length)return a("html, body").animate({scrollTop:e.offset().top-48},1e3,"easeInOutExpo"),!1}}),a(".js-scroll-trigger").click(function(){a(".navbar-collapse").collapse("hide")}),a("body").scrollspy({target:"#mainNav",offset:54}),a(window).scroll(function(){a("#mainNav").offset().top>100?a("#mainNav").addClass("navbar-shrink"):a("#mainNav").removeClass("navbar-shrink")})}(jQuery);

$('.like').click(function () {
    var form_data = {
      num: $(this).attr('id'),
    };
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: form_data,
        dataType: 'html',
        success: function(data){
            if(data=='false')
                alert('투표횟수를 초과하였습니다.');
            else
                alert("투표를 완료했습니다.");
            location.reload();
        }
    });
});
$('.btn1').on('click', function(){
    var target = $(this).attr('rel');
    $('.btn1').css("background-color","#fff");
    $('.btn1').css("border-color","#fff");
    $('.btn1').css("color","#cf6044");
    $(this).css("background-color","#cf6044");
    $(this).css("border-color","#cf6044");
    $(this).css("color","#fff");
    $("#"+target).show().siblings(".plan").hide();
});
// $('.nt_btn').on('click', function(){
//     var target = $(this).attr('rel');
//     $('.btn1').css("background-color","#fff");
//     $('.btn1').css("border-color","#fff");
//     $('.btn1').css("color","#cf6044");
//     $(this).css("background-color","#cf6044");
//     $(this).css("border-color","#cf6044");
//     $(this).css("color","#fff");
//     $("#"+target).show().siblings(".plan").hide();
// });
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new daum.maps.LatLng(34.907394, 126.432618), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
var content = '<div class ="label"><span class="left"></span><span class="center">노점상</span><span class="right"></span></div>';

// 커스텀 오버레이가 표시될 위치입니다
var position = new daum.maps.LatLng(34.908388, 126.432868);
var customOverlay = new daum.maps.CustomOverlay({
    position: position,
    content: content
});

// 커스텀 오버레이를 지도에 표시합니다
customOverlay.setMap(map);
var polygonPath = [
    new daum.maps.LatLng(34.908176, 126.432396),
    new daum.maps.LatLng(34.908233, 126.432376),
    new daum.maps.LatLng(34.908671, 126.433275),
    new daum.maps.LatLng(34.908629, 126.433318),
    new daum.maps.LatLng(34.908345, 126.432892)

];

// 지도에 표시할 다각형을 생성합니다
var polygon = new daum.maps.Polygon({
    path:polygonPath, // 그려질 다각형의 좌표 배열입니다
    strokeWeight: 3, // 선의 두께입니다
    strokeColor: '#39DE2A', // 선의 색깔입니다
    strokeOpacity: 0, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid', // 선의 34.908415, 126.432774스타일입니다
    fillColor: '#A2FF99', // 채우기 색깔입니다
    fillOpacity: 0.5 // 채우기 불투명도 입니다
});

// 지도에 다각형을 표시합니다
polygon.setMap(map);
var content = '<div class ="label"><span class="left"></span><span class="center">미니 포토존</span><span class="right"></span></div>';

// 커스텀 오버레이가 표시될 위치입니다
var position = new daum.maps.LatLng(34.908490, 126.432739);
var customOverlay = new daum.maps.CustomOverlay({
    position: position,
    content: content
});
34.908202, 126.432151
// 커스텀 오버레이를 지도에 표시합니다
customOverlay.setMap(map);
var polygonPath = [
    new daum.maps.LatLng(34.908187, 126.432157),
    new daum.maps.LatLng(34.908274, 126.432123),
    new daum.maps.LatLng(34.908790, 126.433302),
    new daum.maps.LatLng(34.908746, 126.433366),
    new daum.maps.LatLng(34.908410, 126.432790)

];

// 지도에 표시할 다각형을 생성합니다
var polygon = new daum.maps.Polygon({
    path:polygonPath, // 그려질 다각형의 좌표 배열입니다
    strokeWeight: 3, // 선의 두께입니다
    strokeColor: '#39DE2A', // 선의 색깔입니다
    strokeOpacity: 0, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid', // 선의 스타일입니다
    fillColor: 'skyblue', // 채우기 색깔입니다
    fillOpacity: 0.5 // 채우기 불투명도 입니다
});

// 지도에 다각형을 표시합니다
polygon.setMap(map);
var positions = [
    {
        content: '<div class ="label"><span class="left"></span><span class="center">술이저항</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907754, 126.433014),
        color : 'red'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">족발 팔공대</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907666, 126.432893),
        color : 'blue'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">쌈마이웨이</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907576, 126.432770),
        color : 'green'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">술포도</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907462, 126.432869),
        color : 'yellow'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">황진이 & 취한자</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907374, 126.432987),
        color : '#0e1f5b'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">배구파?</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907297, 126.433094),
        color : 'orange'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">2002 포차</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907194, 126.433195),
        color : 'violet'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">포토존</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.908014, 126.432409),
        color : 'skyblue'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">흡연구역</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907471, 126.432559),
        color : 'black'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">흡연구역</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.906567, 126.433026),
        color : 'black'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">무대</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.906567, 126.431897),
        color : 'azure'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">홍보부스</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907053, 126.431776),
        color : 'aquamarine'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">본부부스</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.906906, 126.431832),
        color : 'cyan'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">학과부스</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.907138, 126.432164),
        color : 'chocolate'
    },
    {
        content: '<div class ="label"><span class="left"></span><span class="center">학과부스</span><span class="right"></span></div>',
        center: new daum.maps.LatLng(34.906979, 126.432212),
        color : 'chocolate'
    }

];
for(var i=0; i<positions.length; i++){
// 커스텀 오버레이를 생성합니다
    var customOverlay = new daum.maps.CustomOverlay({
        position: positions[i].center,
        content: positions[i].content
    });

// 커스텀 오버레이를 지도에 표시합니다
    customOverlay.setMap(map);
    var circle = new daum.maps.Circle({
        center : positions[i].center,  // 원의 중심좌표 입니다
        radius: 10, // 미터 단위의 원의 반지름입니다
        strokeWeight: 3, // 선의 두께입니다
        strokeColor: positions[i].color, // 선의 색깔입니다
        strokeOpacity: 0, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
        strokeStyle: 'solid', // 선의 스타일 입니다
        fillColor:  positions[i].color, // 채우기 색깔입니다
        fillOpacity: 0.5  // 채우기 불투명도 입니다
    });
    circle.setMap(map);
}




//img slide
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("show_img");
    var y = document.getElementsByClassName("rank");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length};
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        y[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    y[slideIndex-1].style.display = "block";
}

//google

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag('js', new Date());

gtag('config', 'UA-106867593-1');



