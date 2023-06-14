<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3624917c4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <title>Nav bar</title>
    <script src="main.js" defer></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar__logo">
            <i class="fab fa-apple"></i>
            <a href="">민브로 코딩</a>
        </div>
        <ul class="navbar__menu">
            <li><a href="">홈</a></li>
            <li><a href="">핫딜</a></li>
            <li><a href="">포럼</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">채용</a></li>
        </ul>
        <ul class="navbar__links">
            <li> <i class="fab fa-facebook-square"></i></li>
            <li><i class="fab fa-instagram"></i></li>
        </ul>

        <a href="#" class="navbar__toggleBtn"><i class="fas fa-bars"></i></a>
    </nav>
</body>

<style>
	body {
	    margin: 0;
	    font-family: 'Jua';
	}

	a {
	    text-decoration: none;
	    color: black;
	}

	.navbar {
	    display: flex;
	    justify-content: space-between;
	    align-items: center;
	    background-color: beige;
	    padding: 8px 12px;
	    max-width: 1100px;
	    margin: 0px auto;
	}

	.navbar__logo {
	    font-size: 24px;
	    color: violet;
	}

	.navbar__menu {
	    display: flex;
	    list-style: none;
	    padding-left: 0;
	}

	.navbar__menu li {
	    padding: 8px 12px;
	}
	.navbar__menu li:hover {
	    background-color: grey;
	    border-radius: 4px;
	}

	.navbar__links {
	    list-style: none;
	    padding-left: 0;
	    color: teal;
	    display: flex;
	}

	.navbar__links li {
	    padding: 8px 12px;
	}

	.navbar__toggleBtn {
	    display: none;
	    position: absolute;
	    right: 32px;
	    font-size: 24px;
	}

	@media screen and (max-width: 600px) {
	    .navbar {
	        flex-direction: column;
	        align-items: flex-start;
	        padding: 8px 24px;
	    }
	    .navbar__menu {
	        display: none;
	        flex-direction: column;
	        align-items: center;
	        width: 100%;
	    }
	    .navbar__menu li {
	        width: 100%;
	        text-align: center;
	    }
	    .navbar__links {
	        display: none;
	        justify-content: center;
	        width: 100%;
	    }
	    .navbar__toggleBtn {
	        display: block;
	    }

	    .navbar__menu.active,
	    .navbar__links.active {
	        display: flex;
	    }
	}
</style>

<script>
	const toggleBtn = document.querySelector('.navbar__toggleBtn');
	const menu = document.querySelector('.navbar__menu');
	const links = document.querySelector('.navbar__links');

	toggleBtn.addEventListener('click', () => {
	    menu.classList.toggle('active');
	    links.classList.toggle('active');
	})
</script>

</html>