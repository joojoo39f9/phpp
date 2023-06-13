<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initail-scale=1.0">
  <title>Side Nav Menu</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<body>
  <!-- 클릭 스팟 -->
  <input type="checkbox" id="menu_chk">
  <header>
  <label for="menu_chk" id="menu_icon">
      <!-- 햄버거 메뉴 -->
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
  </label>
  </header>
  <!-- 사이드 메뉴 -->
  <div id="side_menu">
    <ul class="menu_list">
      <li><a href="javascript:location.reload();">Menu1</a></li>
      <li><a href="javascript:location.reload();">Menu2</a></li>
      <li><a href="javascript:location.reload();">Menu3</a></li>
      <li><a href="javascript:location.reload();">Menu4</a></li>
    </ul>
  </div>
  <label for="menu_chk" id="side_bg">
    <!-- 사이드메뉴 오른쪽에 사이드 화면 백그라운드 -->
  </label> 
  
  <style>
    @charset "UTF-8";

    /*전체 영역에 적용*/
    *{ 
      box-sizing: border-box;
      margin: 0 auto;
    }

    header{
      position: sticky;
      background-color: #2d6187;
      height: 60px;
      z-index: 1;
    }

    #menu_chk{
      display: none;
    }



    label#menu_icon{
      position: absolute;
      top: 17px;
      left: 15px;
      width: 33px;
      height: 27px;
      cursor: pointer;
      color: transparent; /*  커서 없애기*/
    }


    label#menu_icon>span{
      /* > 표시는 #me3nu_icon바로 안쪽에 있는 span 이라는 의미 */
      position: absolute;
      left: 0;  
      width: 100%;
      height: 3px;
      border-radius: 3px;
      background-color: #fff;
      transition: 0.3s;
    }

    #menu_icon>span:nth-child(1){
      top: 0;
    }
    #menu_icon>span:nth-child(2){
      top: 11px;
    }
    #menu_icon>span:nth-child(3){
      top: 22px;
    }
    #menu_chk:checked ~ header>#menu_icon>span:nth-child(1){
      transform: translateY(11px) rotate(45deg);
    }
    #menu_chk:checked ~ header>#menu_icon>span:nth-child(2){
      transform: translateY(0px) rotate(225deg);
    }
    #menu_chk:checked ~ header>#menu_icon>span:nth-child(3){
      transform: translateY(-11px) rotate(-45deg);
    }

    div#side_menu{
      position: absolute;
      top: 60px;
      left: -250px;
      width: 250px;
      height: 100%;
      background-color: #3d7ea6;
      transition: .35s;
      z-index: 1;
    }

    #menu_chk:checked ~ div#side_menu{
      left: 0;
    }
    #menu_chk:checked ~ label#side_bg{
      left:  0;
    }

    label#side_bg{
      position: absolute;
      top: 60px;
      left: 100%;
      width:100%;
      height: 100%;
      background-color: rgba(20,39,78, 0.5);
      z-index: 0;
      transition: .2s;
    }

    ul.menu_list{
      text-align: center;
      list-style: none;
      padding: 0;
    }

    ul.menu_list>li>a{
      display: inline-block;
      width: 100%;
      padding: 15px;
      font-size: 23px;
      text-decoration: none;
      color: #fff;
    }
    
    ul.menu_list>li>a:hover{
      background-color: #28abb9;
      color: #effad3;
    }
  </style>

</body>
</html>