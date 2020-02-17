<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awangarda - Sklep Internetowy</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
<section id="top">
    <div class="dumb">
         Masz problem? Napisz na : krzysztof.radko@awangarda.slupsk.pl lub zadzwoń : +48 502 667 328
    </div>
</section>
    <div class="big-basket">
        <div class="basket-div">
           <a style="text-decoration:none;color:black;" href="#"> <span><i style="font-size:30px;" class="icon-basket"></i></span></a>
        </div>
    </div>
    <div class="header">
        <img src="img/logo.png" alt="">
    </div>
    <div class="xd">
        <div class="menu">
            <ol>
                <li id="li1"> <a href="index.php">Strona Główna</a></li>
                <li id="li2"> <a href="informacje.php">Informacje</a></li>
                <li id="li3"> <a href="kontakt.php">Kontakt</a></li>
                <li id="li4"> <a href="index.php#plisy">Systemy Wewnętrzne</a>
                <ul class="main-ul" >
                    <li> <a href="index.php#plisy">Plisy</a></li>
                    <li> <a href="index.php#zaluzjeDrewniane">Żaluzje Drewniane</a></li>
                    <li> <a href="index.php#zaluzjePoziome">Żaluzje Poziome</a></li>
                    <li> <a href="index.php#Wertikale">Wertikale</a></li>
                    <li> <a href="index.php#roletyWewnetrzne">Rolety Wewnętrzne</a></li>
                    <li> <a href="index.php#roletyDzienNoc">Rolety Dzień Noc</a></li>
                    <li> <a href="index.php#Moskitiery">Moskitiery</a></li>
                </ul>
                </li>
                <li id="li5"> <a href="index.php#roletyZewnetrzne">Systemy Zewnętrzne</a>
                <ul class="main-ul">
                    <li> <a href="index.php#roletyZewnetrzne">Rolety Zewnętrzne</a></li>
                    <li> <a href="index.php#Markizy">Markizy</a></li>
                    
                    
                </ul>
                </li>
                <li><a  href="#"><b>Zaloguj się</b></a> </li>
            </ol>
        </div>
    </div>

    <!-- ----------MAIN------------- -->
    <div class="contact">
        <h1>Kontakt</h2>
        <p><b>Sprawy dotyczące zamówień oraz reklamacji: </b>bok@awangarda.slupsk.pl (pon-pt: 9:00 - 18:00)</p>
        
        <p>tel.+48 502 667 328 (pon-pt: 9:00-18:00)</p><br><br><hr><br><br>

        <p>Informacje o wysyłce w dziale: &nbsp;<u><a href=""> "Czas i koszty dostawy"</a></u></p>

        <br><br>
        <br>
        <hr>
        <br>
        
        <p>Jak mogę wysłać zapytanie lub zwrócić/zareklamować towar?</p>
        <br>
        <p>Należy wypełnić formularz:</p>
        <br>
        <h2>Dane  kontaktowe osoby lub instytucji zgłaszającej problem.</h2>
        <form action="">
        

        <table style="margin-top:5vh;"> 
            <tr>
                <td>Imię*<br><input  maxlength="30"  type="text" autocomplete="on"></td>
                <td>Nazwisko*<br><input  maxlength="50"  type="text" autocomplete="on"></td>
            </tr>
            <tr>
                <td>Telefon*<br><input  maxlength="19"  type="text" autocomplete="on"></td>
                <td>E-mail*<br><input  maxlength="55"  type="email" autocomplete="on"></td>
            </tr>
            <tr>
                <td colspan="2">Firma/Instytucja(pełna nazwa)</td>
            </tr>
            <tr>
                <td style="padding:0;" colspan="2"><input placeholder="Jeżeli jesteś osobą prywatną wpisz tutaj imię i nazwisko" maxlength="150"  type="text" autocomplete="on"></td>
            </tr>
            <tr>
                <td>Ulica*<br><input  maxlength="30"  type="text" autocomplete="on"></td>
                <td>Miasto*<br><input  maxlength="30"  type="text" autocomplete="on"></td>
            </tr>
            <tr>
                <td>Kod pocztowy*<br><input  maxlength="30"  type="text" autocomplete="on"></td>
                <td>Województwo*<br> <select  name="" id="">
                    <option value="wybierz województwo">wybierz województwo</option>
                    <option value="Dolnośląskie">Dolnośląskie</option>
                    <option value="Kujawsko-pomorskie">Kujawsko-pomorskie</option>
                    <option value="Lubelskie">Lubelskie</option>
                    <option value="Lubuskie">Lubuskie</option>
                    <option value="Łódzkie">Łódzkie</option>
                    <option value="Małopolskie">Małopolskie</option>
                    <option value="Mazowieckie">Mazowieckie</option>
                    <option value="Opolskie">Opolskie</option>
                    <option value="Podkarpackie">Podkarpackie</option>
                    <option value="Podlaskie">Podlaskie</option>
                    <option value="Pomorskie">Pomorskie</option>
                    <option value="Śląskie">Śląskie</option>
                    <option value="Świętokrzyskie">Świętokrzyskie</option>
                    <option value="Warmińsko-mazurskie">Warmińsko-mazurskie</option>
                    <option value="Wielkopolskie">Wielkopolskie</option>
                    <option value="Zachodniopomorskie">Zachodniopomorskie</option>
                </select> </td>
            </tr>
            <tr>
                <td>Wybierz działanie*<br><select name="" id="">
                    <option value="wybierz">wybierz...</option>
                    <option value="Reklamacja">Reklamacja</option>
                    <option value="Zwrot">Zwrot</option>
                    <option value="zapytanie">Zapytanie</option>
                </select></td>
                <td >Opisz swoją sprawę<br><textarea style="width:100%;"  cols="25" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="file" name="" id=""></td>
                <td> </td>
            </tr>
        </table>

        <div class="button-div"><input class="send" type="button" style="height:100%;width:100%;border:1px solid #0099FF;" value="Wyślij"></div>
        </form>

        
    </div>

    <div class="arrow">
        <a href="#top"><img src="img/arrow.png" alt=""></a>
    </div>
    
    <!--------------------------FOOTER--------------------->
    <div class="footer">
       <span style="color:rgba(255,255,255,0.6);"> &copy; 2020  Copyright:&nbsp; </span> Awangarda Słupsk
        
    </div>
    

    

</div>


<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script src="app.js"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="menu.js"></script>
<script src="smooth-scroll.polyfills.js"></script>
		<script>
			var scroll = new SmoothScroll('a[href*="#"]');
        </script>
<script src="arrow.js"></script>
</body>
</html>