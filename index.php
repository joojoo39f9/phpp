<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>




<div class="nav">
  <ul class="menu">
    <li><a href="#">홈</a></li>
    <li><a href="#">상품</a></li>
    <li><a href="#">서비스</a></li>
    <li><a href="#">자료실</a></li>
    <li><a href="#">고객지원</a></li>
    <li><a href="#">마이페이지</a></li>
    <li><a href="#">로그인</a></li>
    <li><a href="#">회원가입</a></li>
  </ul>
</div>

<style>
html, body{
    margin: 0;
    padding: 0;
    height: 100%;
}

/*메뉴 영역*/
.nav{
    padding: 5px 20px;
    box-sizing: border-box;
    background-color: #fee;
    height: 40px;
    max-width: 1100px;
   	margin: 0px auto;
}
/*메뉴 목록*/
.menu{
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 1em;
}
/*메뉴 아이템*/
.menu li{
    text-align: center;
}
/*메뉴 마우스 호버*/
.menu li:hover{
    border-bottom: 2px solid #f66;
}
.menu li:nth-child(2) {
	margin-left: auto;
}
.menu li:nth-last-child(3){
	margin-right: auto;
}
.menu li:nth-last-child(-n+2){
	border-radius: 15px;
	background-color: #faa;
}
.menu li:nth-last-child(-n+2):hover a{
	border-radius: 15px;
	background-color: #f66;
	color: #fff;
}
.menu li a {
	display: block;
	padding: 5px 10px;
	text-decoration: none;
	letter-spacing: -1px;
	color: #000;
}
</style>


<br>




<section class="content">
  <div class="flexbox">
    <div class="item">content1</div>
    <div class="item">content2</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
    <div class="item">content3</div>
    <div class="item">content4</div>
  </div>
</section>

<style>
	.content{
	    max-width: 1100px;
	    margin: 0 auto;
	}
	.flexbox{
	    display: flex;
	    flex-wrap: wrap;
	    gap: 0.4em;
	}
	.item{
	    min-height: 150px;
	    min-width: 150px;
	    flex-basis: 23.5%;
	    flex-shrink: 1;
	    flex-grow: 1;
	}
	@media screen and (max-width:1023px){
	    .item{
	        flex-basis: 49%;
	    }
	}
	@media screen and (max-width:767px){
	    .item{
	        flex-basis: 100%;
	    }
		header{
			height: 100%;

		}
		/*너비 제한*/
		.nav{
		  width: 260px;
		  height: 100%;
		  max-height: 550px;
		}
		/*세로 보기 설정*/
		.menu{
		  flex-direction: column;
		  height: 100%;/*우측 메뉴를 세로 하단으로 고정에 필요*/
		}
		.menu li:nth-child(2) {
			margin-left: initial;
		}
	    .menu li:nth-child(-n+6){
	        border-bottom: 2px solid rgba(0,0,0,0);
	    }
	    .menu li:nth-child(-n+6):hover{
	        border-bottom: 2px solid #a66;
	    }  
		.menu li:nth-child(7){
		  margin-left: 0;
		  margin-top: auto;
		}
	    .menu li{
	        text-align: initial;
	    }
	}
	.flexbox .item{
	    flex-basis: auto;
	    background-color: #ff321e;
	    padding: 2px;
	    text-align: center;
	}









</style>

	
</body>
</html>