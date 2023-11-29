<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baker Network | Contact Us</title>
    <link rel="icon" type="image/x-icon" href="Image/Logo jeune.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://learn.microsoft.com/en-us/typography/font-list/segoe-ui">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto?query=roboto">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Anton?preview.text=CUSTOM%20WEB%20DEVELOPMENT%20SERVICES">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Text:wght@400;700&display=swap" rel="stylesheet">
    <!--- <link rel="canonical" href="https://www.example.com/page2.html">-->

    <style>
        * {
            margin: 0px;
            padding: 0px;
            list-style: none;
            text-decoration: none;
        }
        h1{
            font-size: 2.5em;
            padding: 0 35%;
            color: rgb(0, 0, 0);
            margin-left: 300px;
            font-family: 'Wix Madefor Text', sans-serif; 
        }
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Pour masquer la barre de défilement horizontale */
            transition: background-color 0.5s;

        }
        .menu {
            background-color: rgb(255, 255, 255);
            width: 100%;
            height: 100px;
            position: fixed;
        }
        .logo{
            width: 130px;
            height: auto;
            position: fixe;
            transition: width 0.5s ease;
            padding-left: 10px;
            margin-top: 10px;
        }
        .menu h1{
            font-size: 2.5em;
            padding: 0 65%;
            color: rgb(255, 255, 255);
            position: fixed;
            font-family: 'Wix Madefor Text', sans-serif; 
        }
        .home {
            width: 100%;
            height: 900px;
        }
        .message{
            width: 45%;
            height: 400px;
            margin-top: 130px;
            margin-left: 30px;
        }
        .txth{
            background: linear-gradient(to top, #B4E5AD,#FFD700); 
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            font-size: 5.7em;
            font-family: sans-serif; 
            letter-spacing: -3px;
        }
        .txtb{
            background: linear-gradient(to top, #9bc796,#B4E5AD); 
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            font-size: 5.7em;
            font-family: sans-serif; 
            letter-spacing: -3px;
            margin-top: -12px;
        }
        .btn1{
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            border-radius: 500px;
            transition-duration: .3s;
            border: 1px solid transparent;
            letter-spacing: 2px;
            min-width: 45%;
            text-transform: uppercase;
            white-space: normal;
            font-weight: 700;
            text-align: center;
            padding: 16px 14px 18px;
            color: #000000;
            box-shadow: inset 0 0 0 2px transparent;
            background-image: linear-gradient(to right,#FFD700,#B4E5AD);
            height: 48px;
            margin-right: 10px;
            margin-top: 20px;
        }
        .btn1:hover{
            color: #000;
            box-shadow: inset 0 0 0 2px #B4E5AD;
            background-image: linear-gradient(transparent,transparent);
        }
        .btn2{
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            border-radius: 500px;
            transition-duration: .3s;
            border: 1px solid transparent;
            letter-spacing: 2px;
            min-width: 45%;
            text-transform: uppercase;
            white-space: normal;
            font-weight: 700;
            text-align: center;
            padding: 16px 14px 18px;
            color: #000000;
            box-shadow: inset 0 0 0 2px #B4E5AD;
            background-color: transparent;
            height: 48px;
            margin-right: 10px;
            margin-top: 20px;
        }
        .btn2:hover{
            color: #fff;
            box-shadow: inset 0 0 0 2px transparent;
            background-color: #B4E5AD;
        }        
        .page1 {
            text-align: center;
            width: 100%;
            top: 900px;
            height: 800px;
            display: flex;
        }
        .webgauche{
            width: 50%;
            height: 800px;
            left: 0;
        }
        .websolu{
            width: 50%;
            height: 400px;
            margin-top: 50px;
            left: 0;
            display: flex;
            text-align: center;
            margin-right: 30px;
        }
        .txtweb{
            background: linear-gradient(to top, #05ffac,#ade5d2); 
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            font-size: 5.7em;
            font-family: sans-serif; 
            letter-spacing: -3px;
            margin-top: -12px;
        }
        .page2 {
            text-align: center;
            width: 100%;
            top: 1700px;
            height: 800px;
        }
        .Hautedroit {
            position: absolute;
            top: 0;
            right: 0;
            width: 65%;
            z-index: -1;
        }
        .HauteGauche {
            position: absolute;
            top: 8.5in;
            left: 0;
            width: 40%;
            z-index: -1;
        }
        .HauteGaucheordi{
            position: absolute;
            top: 9.8in;
            left: 100px;
            width: 30%;
        }
        .basdroite{
            position: absolute;
            top: 1790px;
            right: 0;
            width: 60%;
            z-index: -2;
        }
        .Ordi{
            opacity: 0; /* L'image est initialement transparente */
            transition: opacity 1s ease-in-out; /* Ajoute une transition de 1 seconde en fondu */
            margin: auto;
            width: 40%;
            position: absolute;
            top: 120px;
            right: 200px;
        }
        /*-- Menu --*/
        .menutop{
            padding: 0 7px;
            display: flex;
            justify-content: space-between;
            box-sizing: border-box;
            margin-left: 10px;
            margin-right: 20px;
        }
        .menutop .logo{
            width: 290px;
            height: auto;
            position: fixe;
            transition: width 0.5s ease;
        }
        .menutop h3 {
            font-size: 2em;
            font-weight: bold;
        }
        .menutop .navMenu ul{
            display: flex; 
            list-style-type: none;
        }
        .menutop .navMenu ul li{
            top:30px;
            margin: 0 20px;
            padding: 50px 40px;
            font-family: sans-serif;
            font-size: 1.1em;
            color: black; 
        }
        .menutop .menuHam{
            display: none;
            position: absolute;
            width: 30px;
            right: 50px;
            top: 35px;
        }
        /*-- Menu petit --*/
        @media screen and (max-width:1170px){
            .menutop {
                padding: 0;
            }
            .menutop h3{
                position: absolute;
                top: 30px;
                left: 50px;
                font-size: 2em;
                font-weight: bold;
            }  
            .menutop .menuHam{
                display: block;
            }

        }
        /*Menu en bas*/
        .menubar{
            padding: 7px;
            display: flex;
            justify-content: space-between;
            box-sizing: border-box;
            align-items: center;
            position: fixed;
            top: -50px;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            transition: top 0.3s;
            z-index: 2;
        }
        #menubar {
            top: -100px;
        }
        .menubar h3 {
            font-size: 2em;
            font-weight: bold;
        }
        .menubar .navMenu ul{
            display: flex; 
            list-style-type: none;
        }
        .menubar .navMenu ul li{
            margin: 0 20px;
            font-family: sans-serif;
            font-size: 1.1em;
            color: black; 
        }
        .menubar .menuHam{
            display: none;
            position: absolute;
            width: 30px;
            right: 50px;
            top: 35px;
        }
        .u{
            position: absolute;
            width: 21px;
            left: 17px;
            top: 26px;
        }
        /*-- Menu petit --*/
        @media screen and (max-width:1170px){
            .menubar {
                padding: 0;
                background-color: white;
            }
            .menubar h3{
                position: absolute;
                top: 30px;
                left: 50px;
                font-size: 2em;
                font-weight: bold;
            }
            .navMenu{
                position: absolute;
                background-color: rgba(255, 255, 255, 0.253);
                backdrop-filter: blur(5px);
                top: 0;
                left: 0;
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: -100%;    
            }
            .mobileMenu{
                margin-left: 0;
            }   
            .menubar .menuHam{
                display: block;
            }
            .navMenu ul{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .navMenu ul li{
            margin: 25px 0; 
            font-size: 1.5em;  
            }
        }
      
        
    </style>
</head>
<body>
    <nav class="menubar" id="menubar">
        <a href=""><div id="resizableImage"><img class="logo" src="Image/Baker Network QQ.png" alt="Logo"></div></a>
        <div class="navMenu">
            <ul>
                <li><a href="home.html">Web Solutions</a></li>
                <li><a href="" class="WhyCUs">Projects</a></li>
                <li><a href="" class="Appfo">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">FR</a></li>
            </ul>
        </div>
        <img src="Image/Hamburger_icon.png" alt="Menu" class="menuHam" id="menuHam" onclick="menuHam">
    </nav>
    <div class="home">
        <nav class="menutop" id="menubar">
            <div id="resizableImage"><img class="logo" src="Image/BakerJBLogo web.png" alt="Logo"></div>
            <div class="navMenu">
                <ul>
                    <li><a href="home.html">Web Solutions</a></li>
                    <li><a href="" class="WhyCUs">Projects</a></li>
                    <li><a href="" class="Appfo">About us</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">FR</a></li>
                </ul>
            </div>
            <img src="Image/Hamburger_icon.png" alt="Menu" class="menuHam" id="menuHam" onclick="menuHam">
        </nav>
        <div class="message">
            <div class="messageTop">
                <h2 class="txth">CUSTOM WEB</h2>
                <h2 class="txtb">DEVELOPMENT</h2>
            </div>
            <div class="messageBas">
                <button class="btn1">Work with us</button>
                <button class="btn2">Our services</button>
            </div>

        </div>
        <img id="ordi" class="Ordi" src="Image/bakerordi.png" alt="Ordinateur">
        <img class="Hautedroit" src="Image/HautdroiteJB.png" alt="rien">
    </div>
    <div class="page1">

        <h1>Contact Us</h1>

        
        <img class="HauteGaucheordi" src="Image/ordiGauche.png" alt="ordi">
        <img class="HauteGauche" src="Image/HautgaucheJB.png" alt="rien">
    </div>
    <div class="page2">
        <img class="basdroite" src="Image/BasdroiteVB.png" alt="rien">
    </div>
    <form action="process-form.php" method="post">
        <label>Votre email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>
    <?php
        if (isset($_POST['message'])) {
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: bakernnetwork@bakernetwork' . "\r\n";
            $entete .= 'Reply-to: ' . $_POST['email'];

            $message = '<h1>Message envoyé depuis la page Contact</h1>
            <p><b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

            $retour = mail('bakernnetwork@gmail.com', 'Envoi depuis page Contact', $message, $entete);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
    ?>
</body>
<script>

    setTimeout(function() {
        document.getElementById("ordi").style.opacity = "1";
    }, 2000);
    const menuHamburger = document.querySelector(".menuHam")
    const navMenu = document.querySelector(".navMenu")
 
    menuHamburger.addEventListener('click',()=>{
        navMenu.classList.toggle('mobileMenu')
    })

    var menu = document.getElementById('menubar');
    var lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 400) {
            // L'utilisateur a fait défiler au-delà de 500px
            if (scrollTop > lastScrollTop) {
            // Faites défiler vers le bas
            menu.style.top = '-100px';
            } else {
            // Faites défiler vers le haut
            menu.style.top = '0';
            }
        } else {
            // L'utilisateur est en haut de 500px, masquez le menu
            menu.style.top = '-100px';
        }
    
    lastScrollTop = scrollTop;
    });


    document.addEventListener("DOMContentLoaded", function() {
    window.onscroll = function() {
        showAnimatedDiv();
    };
});

function showAnimatedDiv() {
    var scrollPosition = window.scrollY;

    if (scrollPosition >= 500) {
        document.getElementById("animatedDiv").style.display = "block";
    } else {
        document.getElementById("animatedDiv").style.display = "none";
    }
}


</script>
</html>


