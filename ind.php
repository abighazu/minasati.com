<html>
<head>
       <title>هرحبا بـــــكم</title>
       <link rel="stylesheet" href="style/sty.css">
       <meta name="viewport" content="width =device-width,initial-scale=1">
</head>
<body>
    <section id="banner">
            <img src="image/logoZR.gif" class="logo">
            <div class="banner-text">
                <h1>منصة التعليم عن بعد</h1>
                <p>أستاذ التعليم المتوسط مادة المعلوماتية</p>
                <div class="banner-btn">
                    <a href="signup.php"><span></span>تسجيل</a>
                    <a href="login.php"><span></span>دخول</a>
                </div>
            </div>
    </section>
    <div id="siderNav">
        <nav>
            <ul>
                <li><a herf="#">HOME</a></li>
                <li><a herf="#">FEATURES</a></li>
                <li><a herf="#">SERVICES</a></li>
                <li><a herf="#">TESTIMONTALS</a></li>
                <li><a herf="#">MEET US</a></li>
            </ul>
        </nav>
    </div>    
    <div id="menuBtn">
        <img src="image/menuicon.png" id="menu">
    </div> 

    <!--features-->

    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>why choose us/</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>experienced staff</h1>
            </div>
        </div>
    </section>

    <script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("siderNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";

    menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){
            sideNav.style.right = "0";
            menu.src = "image/closeicon.png"
        }
        else{
            sideNav.style.right = "-250px";
            menu.src="image/menuicon.png";
        }
    }
    </script>  
</body>
</html>
