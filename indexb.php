<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="wholepage"> 

	<style>
		.wholepage {
			max-width: 1100px;
			margin: 0px auto;
		}
	</style>

		<input type="checkbox" id="menu_chk">
		<header>
			<label for="menu_chk" id="menu_icon">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</label>
		</header>

		<style>
			* {
				margin: 0px;
			} 
			#menu_chk {
				display: none;
			}

			/* 모바일 브라우저 창 width가 768px보다 커지는 순간부터 적용 */
			@media all and (min-width: 768px){
				header {
					display: none;
					z-index: 3;
				}
			}
			/* 모바일 브라우저 창 width가 768px보다 작아지는 순간부터 적용 */
			@media all and (max-width: 768px){
				header {
					background-color: #a55;
					height: 30px;
					width: 100%;
					max-width: 1100px;
					padding: 10px;
					z-index: 13;
					color: transparent;
				}

				label#menu_icon {
					position: absolute;
					padding: 10px;
					width: 18px;
					z-index: 3;
				}

				label#menu_icon>span {
					position: absolute;
					left: 0px;
					width: 100%;
					height: 5px;
					border-radius: 4px;
					background-color: white;
				}

				#menu_icon>span:nth-child(1) {
					top: 0px;
				}

				#menu_icon>span:nth-child(2) {
					top: 11px;
				}

				#menu_icon>span:nth-child(3) {
					top: 22px;
				}
				#menu_chk:checked ~ header>#menu_icon>span:nth-child(1) {
					transform: translateY(11px) rotate(45deg) ;
				}
				#menu_chk:checked ~ header>#menu_icon>span:nth-child(2) {
					transform: translateY(0px) rotate(225deg) ;
				}
				#menu_chk:checked ~ header>#menu_icon>span:nth-child(3) {
					transform: translateY(-11px) rotate(-45deg) ;
				}
			}
		</style>

		<div id="side_menu">
			<ul class="menu_list">
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
		<label for="menu_chk" id="side_bg"></label>
		
		<style>

			/* 모바일 브라우저 창 width가 768px보다 커지는 순간부터 적용 */
			@media all and (min-width: 768px){
				html, body{
				    margin: 0;
				    padding: 0;
				    height: 100%;
				}
				 
				/*메뉴 영역*/
				#side_menu{
				    padding: 5px 20px;
				    box-sizing: border-box;
				    background-color: #fee;
				    height: 40px;
				    max-width: 1100px;
				   	margin: 0px auto;
				   	z-index: 3;
				}
				/*메뉴 목록*/
				.menu_list{
				    display: flex;
				    list-style: none;
				    margin: 0;
				    padding: 0;
				    gap: 1em;
				    z-index: 3;
				}
				/*메뉴 아이템*/
				.menu_list li{
				    text-align: center;
				}
				/*메뉴 마우스 호버*/
				.menu_list li:hover{
				    border-bottom: 2px solid #f66;
				}
				.menu_list li:nth-child(2) {
					margin-left: auto;
				}
				.menu_list li:nth-last-child(3){
					margin-right: auto;
				}
				.menu_list li:nth-last-child(-n+2){
					border-radius: 15px;
					background-color: #faa;
				}
				.menu_list li:nth-last-child(-n+2):hover a{
					border-radius: 15px;
					background-color: #f66;
					color: #fff;
				}
				.menu_list li a {
					display: block;
					padding: 5px 10px;
					text-decoration: none;
					letter-spacing: -1px;
					color: #000;
					z-index: 3;
				}
			}
			/* 모바일 브라우저 창 width가 768px보다 작아지는 순간부터 적용 */
			@media all and (max-width: 768px){
				#side_menu {
					position: absolute;
					top: 50px;
					width: 255px;
					left: -255px;
					height: 100%;
					background-color: #a99;
					z-index: 3;
				}
				#menu_chk:checked ~ #side_menu {
					left: 0px;
				}
				#side_menu .menu_list {
					padding: 10px;
				}
				#side_menu .menu_list li {
					font-size: 30px;
					line-height: 45px;			
				}
				#side_menu .menu_list li a {
					display: inline-block;
					width: 100%;
					padding: 15px;
					text-decoration: none;			
					color: white;
				}
				#side_menu .menu_list li:hover {
					background-color: #a77;
					text-decoration: none;
				}
				label#side_bg {
					position: absolute;
					top: 50px;
					left: -100%;
					width: 100%;
					height: 100%;
					background-color: rgba(0, 0, 0, 0.5);

					width: 100%;
					height: 100%;
					z-index: 0;
				}
				#menu_chk:checked ~ label#side_bg {
					left: 0px;
				}
			}
		</style>

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
			.content {
				margin: 3px; 
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
 
			.flexbox .item{
			    flex-basis: auto;
			    background-color: #ff321e;
			    padding: 2px;
			    text-align: center;
			}  
		</style>
	</div>
</body>
</html>