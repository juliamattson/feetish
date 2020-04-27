<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesUs - Hemsida</title> 
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/checkOutStyle.css">
    <link rel="stylesheet" href="./style/shipperStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">    
    <script defer type ="module" src="./checkOutHandler.js"></script>
    <script defer type ="module" src="./shippersHandler.js"></script>
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
    <div class="numberOfItemsInCart"></div>
        <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
    </div>
    </div>
</nav>   
    <div class="categoryTitle">
        <h2>Check out</h2>
    </div>
    <div class="checkOutForm">                     
    <div id="checkoutField" id="userData">
        <h1>Förnamn</h1>
        <input type="text" id="fName">
        <h1>Efternamn</h1>
        <input type="text" id="lName">
        <h1>Adress</h1>
        <input type="text" id="street">
        <h1>Stad</h1>
        <input type="text" id="city">
        <h1>Postnummer</h1>
        <input type="text" id="postalcode">
        <h1>Land</h1>
        <input type="text" id="country">
        <h1>Telefonnummer</h1>
        <input type="text" id="phone">
        <h1>Username</h1>
        <input type="text" id="usernameInput">
        <h1>Password</h1>
        <input type="password" id="passwordInput">    
    </div>       
        <h3 style="text-align:center">Välj din fraktalternativ:</h3>
        
    <div id="shippers">
        <button id="getShippers">Klicka här för att hämta våra fraktalternativ</button>
    </div>
        <button id="checkoutSubmit">Checkout</button>
    </div>
    <div id="buttonDiv"></div>
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
