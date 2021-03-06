﻿<!DOCTYPE html>
<html>
<head>

<script>

var carsAndModels = {};
carsAndModels['FOOD'] = ['한식', '중식','일식', '양식','갠취'];
carsAndModels['DESSERT'] = ['빨강','초록','파랑','흰색','핑크'];
carsAndModels['PLAY'] = ['PC방','노래방','오락실','갠취'];
carsAndModels['SHOW'] = ['버스킹','영화관','극장','공연','갠취'];

function ChangeCarList() {
    var carList = document.getElementById("car");
    var modelList = document.getElementById("carmodel");
    var selCar = carList.options[carList.selectedIndex].value;
    while (modelList.options.length) {
        modelList.remove(0);
    }
    var cars = carsAndModels[selCar];
    if (cars) {
        var i;
        for (i = 0; i < cars.length; i++) {
            var car = new Option(cars[i], i);
            modelList.options.add(car);
        }
    }
	

} 

</script>

<style>
body{
	background-color:black;
	}
	
	#dd{

		width:100%;
		background-color:black;
		text-align:center;
	
	}

	#main{
		margin:auto;
	}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 100px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 13.5%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

    
}

.dropdown-content a {
    color: black;
    padding: 12px 40px;
    text-decoration: none;
    display: block;
    text-align: center;
	font-size:25px;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

#im{
	position:relative;
	
	width:3%;
	height:3%;
}

#wrapper{
position:absolute;
top:30%;
left:30%;
z-index:-11;
}

td{
color:white;
}

</style>
</head>
<body>

<div id=dd>
	<img id=im src="http://cslab2.kku.ac.kr/~201341357/image/main/home.png" 
		onclick="location.href='http://cslab2.kku.ac.kr/~201341357'">

	<div id=main>
		<li class="dropdown">
			<a href="#home" class="drop">FOOD</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal.html">한식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal2_c.html">중식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal3_j.html">일식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal4_y.html">양식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal5_s.html">갠취</a>
			</div>
		</li>
		<li class="dropdown" class="drop">
			<a href="#news">DESSERT</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal.html">빨강</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal2_g.html">초록</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal3_b.html">파랑</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal4_w.html">흰색</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal5_p.html">핑크</a>
			</div>
		</li>
		<li class="dropdown" class="drop">
			<a href="#news">PLAY</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal.html">PC방</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal2.html">노래방</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal3.html">오락실</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal4.html">갠취</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">SHOW</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal.html">버스킹</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal2.html">영화관</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal3.html">극장</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal4.html">공연</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal5.html">갠취</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">일반모드</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register.html">일반모드</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register_hard.html">모험모드</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register_DBA.php" target="popup" onclick="window.open('http://cslab2.kku.ac.kr/~201341357/register/register_DBA.html','name','width=300,height=200')">회원가입</a>
			</div>
		</li>
	</div>
</div>

<!-- 여기 부터 -->
<div id=wrapper>

<form action="./insert_normal.php" method="post" enctype="multipart/form-data">>

	<table border="0"  align=center id=table_set width="700px" height="100">

		<tr>
			<td>아이디</td>
			<td width=500><input type="text" name="user_id"></td>
		</tr>
	
		<tr>
			<td>비밀번호</td>
			<td width=500><input type="text" name="user_pw"></td>
		</tr>
	
	

		<tr>
			<td>분류</td>
	
			<td>
				<select id="car" onchange="ChangeCarList()" name="subject"> 
					<option value="">-- WHAT --</option> 
					<option value="FOOD">FOOD</option> 
					<option value="DESSERT">DESSERT</option> 
					<option value="PLAY">PLAY</option> 	
					<option value="SHOW">SHOW</option> 	
				</select> 
				<select id="carmodel" name="subject_sub"></select> 
			</td>	
		</tr>
	</table>	


	<div id="map" style="width:700px;height:600px;background-color:white;"></div>



	<table  border="0"  align=center id=table_set width="700px" height="200px">	

		<tr>
			<td>이름</td>
			<td width=100>
				<input type="text" id="serch" name="shop">
				<input type="button" value="검색" onclick="ser();">
			</td>
		</tr>
	
		<tr>	
			<td>가격대</td>
			<td width=500>
				<input type="number" min="0" max="5000000" step="1000" placeholder="10000" name="price">원
			</td>
		</tr>
	
		<tr height=100>
			<td>설명</td>
			<td width=500>
				<textarea name="introduce" rows=5 cols=50 placeholder="자기를 소개하는 글을 쓰게요"></textarea>
			</td>
		</tr>
	
		<tr>
			<td>사진</td>
			<td>
				
					<input type="file" name="fileToUpload" id="fileToUpload">
					
			</td>
	</tr>
	
	
	<tr>
		<td colspan=2 align=center> 
			<input type="submit" value="제출" name="submit">
		</td>
	</tr>
	
	</table>
		
</form>
</div>	



<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=562fd768516164974d8469bb813a926f&libraries=services,clusterer,drawing"></script>
<script>
var pp;
// 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
var infowindow = new daum.maps.InfoWindow({zIndex:1});

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new daum.maps.LatLng(37.552065890537165, 126.92403582091283), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

	var map = new daum.maps.Map(mapContainer, mapOption); 
	
function ser(){
var nname= document.getElementById('serch').value;
// 지도를 생성합니다    


// 장소 검색 객체를 생성합니다
var ps = new daum.maps.services.Places(); 

// 키워드로 장소를 검색합니다
ps.keywordSearch('홍대'+nname, placesSearchCB); 

// 키워드 검색 완료 시 호출되는 콜백함수 입니다
function placesSearchCB (status, data, pagination) {
    if (status === daum.maps.services.Status.OK) {

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
        // LatLngBounds 객체에 좌표를 추가합니다
        var bounds = new daum.maps.LatLngBounds();

        for (var i=0; i<data.places.length; i++) {
            displayMarker(data.places[i]);    
            bounds.extend(new daum.maps.LatLng(data.places[i].latitude, data.places[i].longitude));
        }       

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
        map.setBounds(bounds);
    } 
}

// 지도에 마커를 표시하는 함수입니다
function displayMarker(place) {
    
    // 마커를 생성하고 지도에 표시합니다
    var marker = new daum.maps.Marker({
        map: map,
        position: new daum.maps.LatLng(place.latitude, place.longitude) 
    });

    // 마커에 클릭이벤트를 등록합니다
    daum.maps.event.addListener(marker, 'click', function() {
        // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
        infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.title + '</div>');
	
        infowindow.open(map, marker);
	var pp =place.title;
    });
}
}
</script>
	
</body>
</html>
