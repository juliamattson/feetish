<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">

    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <script defer type ="module" src="./myPageHandler.js"></script>

</head>
<body>
<header>
    <div class="headTitle">
        <a href="index.php"><h1 class="textTitle">Shoes US</h1></a>
    </div>
    </header>
    

    <nav> 
        <div class="manWomanField">
        <div class="dam"></div>
        <div class="herr"></div>
        <div class="rea"></div>
        </div>     

        <div class="loginCartWrap">
        <div class="loginText">
            <a href="login.php">Inloggning</a>
        </div>
        <div class="myPageText">
            <a href="myPage.php">Mina sidor</a>
        </div>
        <div class="cartField">
            <div id="numberOfItemsInCart"></div>
            <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
        </div>
        </div>
    </nav>
   

    <div class="myPageBody">
      <h1 style="color: #333333; text-align: center;">Mina beställningar</h1>
    </div>   
    <div class="MainOrderDiv"></div>

    <footer>
        <br> <br>
        <form class="newsletterField" id ="newsletter-form">
        Prenumerera på vårt nyhetsbrev: 
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    
        <label for="firstname">Förnamn</label>
        <input type="text" name="firstname" id="firstname">
    
        <label for="lastname">Efternamn</label>
        <input type="text" name="lastname" id="lastname">
        <button type="submit" id="newsLetterBtn">Skicka</button>
        </form>
    <br> <hr> 
    <div class="footWrap">        
    <div class="contactUs">
        <h3>Kontakta Oss</h3>
        E-mail: <a href = "mailto: shoesus@gmail.com">ourmail@shoesus.com</a><br>
        Adress: Våragatan 6 <br> 455 65 Göteborg <br> Sverige
    </div>
    <div class="clientService">
        <h3>Kundtjänst</h3>
        <a href="#">Köpvillkor</a><br>
        <a href="#">Leverans</a><br>
        <a href="#">Byte/Returer</a><br>
        <a href="#">Integritetspolicy</a>
    </div>
    <div class="beMember">
        <h3>Medlem</h3>
        <a href="#">Bli medlem</a><br>
        <a href="#">Nyhetsbrev</a>
    </div>
    </div>
    
</footer>
</body>
</html>