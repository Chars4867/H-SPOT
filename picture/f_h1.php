<?php

$rr1 = $_GET['num1'];
$rr2 =$_GET['num2'];
$rr3 =$_GET['num3'];



mysql_connect('localhost','201341357','whdals123');
mysql_select_db('201341357_DBA');
mysql_query("set names utf8");
$list = mysql_query("SELECT * from LOGIN_HARD where user_id='$rr1' AND introduce1='$rr2' AND picture='$rr3';");
$row = mysql_fetch_array($list);



?>

<!DOCTYPE html>
<html lang="ko">
<head>

<style>
	#dd{
		position:fixed;
		top:0;
		left:0;
		width:100%;
		background-color:black;
		text-align:center;
	
	}

	#main{
		margin:0;
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

body{
	background-color:white;
}




<!-- 여기 부터 -->

#name{
	display:block;

}


p{
	color:white;
}

#clone_img{
display:block;
margin:30px auto;
width:70%;

}

#wrapper {
  width: 70%;
  height: 70%;
  margin: 10% auto;

}


.jumbotron{

margin:20px auto;
background-color:#eee;
width:100%;

}
.jumbotron h1,.jumbotron .h1{color:inherit}
.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}
.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron{border-radius:6px}
.jumbotron .container{max-width:100%}
@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}
.container .jumbotron{padding-right:60px;padding-left:60px}
.jumbotron h1,.jumbotron .h1{font-size:63px}}

h1{
color:white;
}

.label{
display:inline;
padding:.2em .6em .3em;
font-size:75%;
font-weight:700;
line-height:1;
color:#fff;
text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}

a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}
.label:empty{display:none}
.btn .label{position:relative;top:-1px}
.label-default{background-color:#777}
.label-default[href]:hover,.label-default[href]:focus{background-color:#5e5e5e}
.label-primary{background-color:#428bca}
.label-primary[href]:hover,.label-primary[href]:focus{background-color:#3071a9}
.label-success{background-color:#5cb85c}
.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}
.label-info{background-color:#5bc0de}
.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}
.label-warning{background-color:#f0ad4e}
.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}
.label-danger{background-color:#d9534f}
.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}

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
			<a href="#" class="dropbtn">REGISTER</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register.html">일반모드</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register_hard.html">모험모드</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register_DBA.php" target="popup" onclick="window.open('http://cslab2.kku.ac.kr/~201341357/register/register_DBA.html','name','width=300,height=200')">회원가입</a>					
			</div>
		</li>
	</div>
</div>




	 <div id=wrapper>
	
	<?php
	echo" <img src=\"http://cslab2.kku.ac.kr/~201341357/register/uploads_hard/{$row['subject']}/{$row['picture']}\" id=clone_img>"
	?>
	<div id="name"><?php echo"<h1 style=\"color:black;text-align:center;\">{$row['subject']}</h1>"?></div>
	<div id="name"><?php echo"<h1 style=\"color:black;text-align:center;\">{$row['price']}</h1>"?></div>
	<div id="name"><?php echo"<h1 style=\"color:black;text-align:center;\">난이도 {$row['hard']}%</h1>"?></div>
	<h1><span class="label label-primary">힌트1</span></h1>
   	   	<div class="jumbotron">
			<?php
			echo" <h3> {$row['introduce1']} </h3> "
			?>
         </div>
			
	   	 
	
	<h1><span class="label label-warning">힌트2</span></h1>	
   	<div class="jumbotron">
			<?php
			echo" <h3> {$row['introduce2']} </h3> "
			?>
         </div>
	
	
	<h1><span class="label label-danger">리뷰</span></h1>
  	<div class="jumbotron">
        <section class="live-re layout-wrapper">
     <!--라이브리 시티 설치 코드 -->
    <div id="lv-container" data-id="city" data-uid="MTAyMC8yODcyNi81Mjk3">
    <script type="text/javascript">
       (function(d, s) {
           var j, e = d.getElementsByTagName(s)[0];
    
           if (typeof LivereTower === 'function') { return; }
    
           j = d.createElement(s);
           j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
           j.async = true;
    
           e.parentNode.insertBefore(j, e);
       })(document, 'script');
    </script>
    <noscript>라이브리 댓글 작성을 위해 JavaScript를 활성화 해주세요</noscript>
    </div>
     <!--시티 설치 코드 끝 -->
</section>
        
    </div>
		 
	</div>

</body>
</html>

