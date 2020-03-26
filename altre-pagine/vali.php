<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-IT" lang="it-IT">
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Prova progetto TechWeb" />
    <meta name="keywords" content="TechWeb" />
    <meta name="author" content="Gruppo kjsabfsaf" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0" />
    <title>Ricerca</title>
    <meta name="keywords" content="4 Forchette, food delivery, da asporto, ecommerce"/>
    <meta name="description" content="Pagina Generale di ricerca"/>
    <link rel="stylesheet" type="text/css" href="../css/header-smartphone.css" media="handheld, screen and (max-width:1023px)"/>
    <link rel="stylesheet" type="text/css" href="../css/header-desktop.css" media="screen and (min-width:1024px)"/>
    <link rel="stylesheet" type="text/css" href="../css/header(print).css" media="print"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Source+Serif+Pro:400,600&display=swap" rel="stylesheet"/>
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../js/header.js" defer="defer"></script>
    <link rel="stylesheet" type="text/css" href="../css/ricerca-desktop.css" media="screen and (min-width:1024px)"/>
<link rel="stylesheet" type="text/css" href="../css/ricerca-smartphone.css" media="screen and (max-width:1023px)"/>
<link rel="stylesheet" type="text/css" href="../css/ricerca(print).css" media="print"/>

    <noscript>
      <link rel="stylesheet" type="text/css" href="../css/header(noscript).css" media="handheld, screen"/>
          </noscript>
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->
  </head>
<body>
  <ul id="skip">
    <li>
      <a href="#content" tabindex="0" xml:lang="en" lang="en">Go to the content</a>
    </li>
    <li>
      <a href="#mySidenav" tabindex="0" xml:lang="en" lang="en">Go to the navigation bar</a>
    </li>
    <li>
      <a href="#barraMenu" tabindex="0" xml:lang="en" lang="en">Go to the navigation bar</a>
    </li>
    <li>
      <a href="#searchBar" tabindex="0" xml:lang="en" lang="en">Go to the search bar</a>
    </li>
  </ul>
  <header>
    <div id="barraAlta">
      <form id="formBarraAlta" method="post" action="#">
        <fieldset>
            <legend>Ubicazione</legend>
            <label for="regione1">Regione:</label>
            <select name="regione" id="regione1" title="Selezione regione" onfocus="toggleR('regione1');" onblur="toggleR('regione1');" onkeydown="recharge(event,0,true);" onclick="rechargeClick(0,true);">
              <option value="-" selected="selected">-</option>
	<option value="Abruzzo" >Abruzzo</option>
			  <option value="Basilicata" >Basilicata</option>
			  <option value="Calabria" >Calabria</option>
			  <option value="Campania" >Campania</option>
			  <option value="Emilia-Romagna" >Emilia-Romagna</option>
			  <option value="Friuli-Venezia0Giulia" >Friuli-Venezia Giulia</option>
			  <option value="Lazio" >Lazio</option>
			  <option value="Liguria" >Liguria</option>
			  <option value="Lombardia" >Lombardia</option>
			  <option value="Marche" >Marche</option>
			  <option value="Molise" >Molise</option>
			  <option value="Piemonte" >Piemonte</option>
			  <option value="Puglia" >Puglia</option>
			  <option value="Sardegna" >Sardegna</option>
			  <option value="Sicilia" >Sicilia</option>
			  <option value="Toscana" >Toscana</option>
			  <option value="Trentino-Alto0Adige" >Trentino-Alto Adige</option>
			  <option value="Umbria" >Umbria</option>
			  <option value="Valle0d0Aosta" >Valle d&apos;Aosta</option>
			  <option value="Veneto" >Veneto</option>
			              </select>
            <label for="province1">Provincia:</label>
            <select name="provincia" id="province1" onfocus="" onblur="setP('province1');" onkeydown="recharge(event,0,false);" onclick="rechargeClick(0,false);">
              <option value="-" selected="selected">-</option>
	            </select>
            <label for="regSub">salva</label>
            <input id="regSub" value="Salva" type="submit"/>
          </fieldset>
      </form>
    </div>

    <a title="Hamburger menu" href="#hamburger" aria-label="Hamburger menu" id="hamburger">
      <div class="Line"></div>
      <div class="Line"></div>
      <div class="Line"></div>
    </a>
    <div id="mySidenav" class="Sidenav">
      <ul id="upperMenu">
        <li>
          <a href="profilo.php" id="profilo1">          <div id="defImg1">
            <img id="profiloImg1" class="Larghezza" src="../img/users/user@user.it.jpeg" alt="Immagine Profilo"/>
          </div>
          <p class="Caption">Profilo</p>
          </a>
		        </li>
        <li>
          <a id="regione" href="#regione2">
            <img id="regioneImg" class="Piccolo" src="../img/512px/RegioneWhite2.png" alt="Immagine Regione"/>
            <p class="Caption">Regione</p>
          </a>
        </li>
      </ul>
      <ul>
        <li>
          <a xml:lang="en" lang="en" href="../index.php">Home</a>
        </li>
        <li>
          <a href="azienda.php" class="DropAzienda">AZIENDA</a>
		          <ul id="myDropAzienda">
            <li>
              <a href="lastoria.php">La Storia</a>
		            </li>
            <li>
              <a href="chisiamo.php">Chi Siamo</a>
		            </li>
            <li>
              <a href="denominazione.php">Denominazione Prodotti</a>
		            </li>
          </ul>
        </li>
        <li>
          <a href="categorie.php?cat=Piatti0Caldi" class="DropPiatti">PIATTI CALDI</a>
		          <ul id="myDropPiatti">
            <li>
              <a href="categoria.php?cat=Primi0Piatti&page=1">Primi Piatti</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Secondi0Piatti&page=1">Secondi Piatti</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Pizze&page=1">Pizze</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Contorni&page=1">Contorni</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Dessert&page=1">Dessert</a>
		            </li>
          </ul>
        </li>
        <li>
          <a href="categorie.php?cat=Bottega" class="DropBottega">BOTTEGA</a>
		          <ul id="myDropBottega">
            <li>
              <a href="categoria.php?cat=Latticini&page=1">Latticini</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Salumeria&page=1">Salumeria</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Fornaio&page=1">Fornaio</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Dispensa&page=1">Dispensa</a>
		            </li>
          </ul>
        </li>
        <li>
          <a href="categorie.php?cat=Bevande" class="DropBevande">BEVANDE</a>
		          <ul id="myDropBevande">
            <li>
              <a href="categoria.php?cat=Alcolici&page=1">Alcolici</a>
		            </li>
            <li>
              <a href="categoria.php?cat=Analcolici&page=1">Analcolici</a>
		            </li>
          </ul>
        </li>
      </ul>
      <div class="StackLine"></div>
      <form id="formSmartphone" method="post" action="#">
        <fieldset>
          <legend>Ubicazione</legend>
          <label for="regione2">Regione</label>
          <select name="regione" id="regione2" onfocus="toggleR('regione2');" onblur="toggleR('regione2');" onkeydown="recharge(event,1,true);" onclick="rechargeClick(1,true);">
            <option value="-" selected="selected">-</option>
	<option value="Abruzzo" >Abruzzo</option>
			  <option value="Basilicata" >Basilicata</option>
			  <option value="Calabria" >Calabria</option>
			  <option value="Campania" >Campania</option>
			  <option value="Emilia-Romagna" >Emilia-Romagna</option>
			  <option value="Friuli-Venezia0Giulia" >Friuli-Venezia Giulia</option>
			  <option value="Lazio" >Lazio</option>
			  <option value="Liguria" >Liguria</option>
			  <option value="Lombardia" >Lombardia</option>
			  <option value="Marche" >Marche</option>
			  <option value="Molise" >Molise</option>
			  <option value="Piemonte" >Piemonte</option>
			  <option value="Puglia" >Puglia</option>
			  <option value="Sardegna" >Sardegna</option>
			  <option value="Sicilia" >Sicilia</option>
			  <option value="Toscana" >Toscana</option>
			  <option value="Trentino-Alto0Adige" >Trentino-Alto Adige</option>
			  <option value="Umbria" >Umbria</option>
			  <option value="Valle0d0Aosta" >Valle d&apos;Aosta</option>
			  <option value="Veneto" >Veneto</option>
			            </select>
          <label for="province2">Provincia</label>
          <select name="provincia" id="province2" onblur="setP('province2');" onkeydown="recharge(event,1,false);" onclick="rechargeClick(1,false);">
            <option value="-" selected="selected">-</option>
	          </select>
          <label for="navSub">invia</label>
          <input id="navSub" value="Invia" type="submit"/>
        </fieldset>
      </form>
    </div>
  <div id="blackanddeker">

  </div>
  <img id="logo" src="../img/logo.png" alt="Logo aziendale"/>
  <div id="LinkBarraAlta">
      <a href="?logout=TRUE" title="Esci dal profilo">Logout</a>
      </div>
  <div id="sopra-icone">
    <ul id="icone">
      <li>
        <a href="profilo.php" title="Accedi al tuo profilo" id="profilo2">          <p id="defImg2">
            <img id="profiloImg2" class="Larghezza" src="../img/users/user@user.it.jpeg" alt="Pagina profilo"/>
          </p>
          <p class="Caption">Profilo</p>
        </a>
		      </li>
      <li id="ricerca" onclick="dropRicerca()">
        <img id="ricercaImg" class="Piccolo" src="../img/512px/Search.png" alt="Mostra barra di ricerca"/>
        <p class="Caption">Ricerca</p>
      </li>
      <li>
        <a href="cart.php" title="Visualizza il carrello" id="carrello">          <img id="carrelloImg" class="Piccolo" src="../img/512px/Basket.png" alt="Pagina carrello"/>
          <p class="Caption">Carrello</p>
        </a>
		      </li>
    </ul>
  </div>
  <div id="barraMenu">
    <ul id="menuDesk">
      <li>
        <a xml:lang="en" lang="en" href="../index.php">Home</a>
      </li>
      <li>
        <a href="azienda.php" class="DropStoria">Azienda</a>
		        <ul id="dropAzienda">
          <li>
            <a href="lastoria.php">La Storia</a>
		          </li>
          <li>
            <a href="chisiamo.php">Chi Siamo</a>
		          </li>
          <li>
            <a href="denominazione.php">Denominazione Prodotti</a>
		          </li>
        </ul>
      </li>
      <li>
        <a href="categorie.php?cat=Piatti0Caldi" class="DropPrimi">Piatti Caldi</a>
		        <ul id="dropPiatti">
          <li>
            <a href="categoria.php?cat=Primi0Piatti&page=1">Primi Piatti</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Secondi0Piatti&page=1">Secondi Piatti</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Pizze&page=1">Pizze</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Contorni&page=1">Contorni</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Dessert&page=1">Dessert</a>
		          </li>
        </ul>
      </li>
      <li>
        <a href="categorie.php?cat=Bottega" class="DropLatticini">Bottega</a>
		        <ul id="dropBottega">
          <li>
            <a href="categoria.php?cat=Latticini&page=1">Latticini</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Salumeria&page=1">Salumeria</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Fornaio&page=1">Fornaio</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Dispensa&page=1">Dispensa</a>
		          </li>
        </ul>
      </li>
      <li>
        <a href="categorie.php?cat=Bevande" class="DropEnoteca">Bevande</a>
		        <ul id="dropBevande">
          <li>
            <a href="categoria.php?cat=Alcolici&page=1">Alcolici</a>
		          </li>
          <li>
            <a href="categoria.php?cat=Analcolici&page=1">Analcolici</a>
		          </li>
        </ul>
      </li>
    </ul>
    <div id="myDropRicerca">
      <form action="ricerca.php">
        <fieldset>
          <legend>Ricerca</legend>
          <input id="searchBar" title="Barra ricerca" type="text" placeholder="Scrivi qui..." name="search"/>
          <button type="submit" title="Inizia ricerca">
            <img id="lente" src="../img/512px/Search.png" alt="Cerca" class="Piccolo"/>
          </button>
        </fieldset>
      </form>
    </div>
  </div>
  <div id="myBtn">
    <img src="../img/512px/FrecciaSu.png" alt="torna su"/>
  </div>
</header>
<ul id="content" class="Breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Ricerca</li>
</ul>
<h1 class="Hric">Categorie</h1>
	<div class="Row">
	<div class="H">
				<a href="categoria.php?cat=Primi0Piatti&page=1">
			    	<div class="Prduct">
			      		<img src="../img/categorie/Primi0Piatti.jpg" alt="Primi Piatti"/>
			      		<p class="Sdp">Scopri di pi&#249;</p>
			    	</div>
			  	</a>
			  	<a href="categoria.php?cat=Primi0Piatti&page=1">
			   		<h2 class="Tit">Primi Piatti</h2>
			  	</a>
			</div>
		</div>
		<div class="Divx"></div>
			<h1 class="Hric">Prodotti</h1>
	<div class="Row">
	<div class="H">
				<a href="./prodotto.php?ID=67">
			    	<div class="Prduct">
			      		<p class="Price">&#8364;35.00</p>
			      		<img src="../img/product/67.jpg" alt="Pasta con Aragosta"/>
			      		<p class="Sdp">Scopri di pi&#249;</p>
			    	</div>
			  	</a>
			  	<a href="./prodotto.php?ID=67">
			   		<h2 class="Tit">Pasta con Aragosta</h2>
			  	</a>
			  	<a href="./venditore.php?Nome=Martha0Vandellas">
				    Venditore: Martha Vandellas
				</a>
			</div>
		<div class="H">
				<a href="./prodotto.php?ID=68">
			    	<div class="Prduct">
			      		<p class="Price">&#8364;20.90</p>
			      		<img src="../img/product/68.jpg" alt="Pasta Ligure"/>
			      		<p class="Sdp">Scopri di pi&#249;</p>
			    	</div>
			  	</a>
			  	<a href="./prodotto.php?ID=68">
			   		<h2 class="Tit">Pasta Ligure</h2>
			  	</a>
			  	<a href="./venditore.php?Nome=Martha0Vandellas">
				    Venditore: Martha Vandellas
				</a>
			</div>
		<div class="H">
				<a href="./prodotto.php?ID=70">
			    	<div class="Prduct">
			      		<p class="Price">&#8364;14.00</p>
			      		<img src="../img/product/70.jpg" alt="Pasta Ai Pomodorini"/>
			      		<p class="Sdp">Scopri di pi&#249;</p>
			    	</div>
			  	</a>
			  	<a href="./prodotto.php?ID=70">
			   		<h2 class="Tit">Pasta Ai Pomodorini</h2>
			  	</a>
			  	<a href="./venditore.php?Nome=Martha0Vandellas">
				    Venditore: Martha Vandellas
				</a>
			</div>
		<div class="H">
				<a href="./prodotto.php?ID=73">
			    	<div class="Prduct">
			      		<p class="Price">&#8364;19.80</p>
			      		<img src="../img/product/73.jpg" alt="Pasta alla Campidanese"/>
			      		<p class="Sdp">Scopri di pi&#249;</p>
			    	</div>
			  	</a>
			  	<a href="./prodotto.php?ID=73">
			   		<h2 class="Tit">Pasta alla Campidanese</h2>
			  	</a>
			  	<a href="./venditore.php?Nome=Martha0Vandellas">
				    Venditore: Martha Vandellas
				</a>
			</div>
		<form action="ricercamdp.php" method="post" class="Clearer">
                <fieldset>
                    <label for="Prodotti1" class="RicercaVia">1</label>
                    <input id="Prodotti1" class="Mdp" name="Prodotti" type="submit" value="Mostra di più"/>
                    
                    <input id="Prodotti2" name="query" type="hidden" value="(SELECT Prodotti.ID, Prodotti.Nome, Prodotti.Negozio, Prodotti.Prezzo FROM Prodotti INNER JOIN Raggio ON Prodotti.Raggio=Raggio.ID WHERE Prodotti.Nome LIKE '%Past%' AND Nome NOT LIKE '%_Past%' ) UNION (SELECT Prodotti.ID, Prodotti.Nome, Prodotti.Negozio, Prodotti.Prezzo FROM Prodotti INNER JOIN Raggio ON Prodotti.Raggio=Raggio.ID WHERE Prodotti.Nome LIKE '%0Past%' ) "/>
                    
                    <input id="Prodotti3" name="ricerca" type="hidden" value="Pasta"/>
                </fieldset>
            </form>
            </div>
		<footer>
      <div class="StackLine"></div>
      <div id="stack1" class="Center">
        <ul id="shopOn">
          <li><h1 class="Center" lang="en">SHOPPING ONLINE</h1></li>
          <li><a href="ship.php">Spedizioni & Resi</a></li>
          <li><a href="cookie.php" lang="en">Cookie Policy</a></li>
          <li><a href="pagamenti.php">Pagamenti</a></li>
        </ul>
        <ul id="servCli">
          <li><h1 class="Center">SERVIZIO CLIENTI</h1></li>
          <li><a href="contatti.php">Contattaci</a></li>
          <li><a href="faqs.php"><abbr title="Frenquently Asked Questions">FAQs</abbr></a></li>
        </ul>
        <ul id="aziend">
          <li><h1 class="Center">AZIENDA</h1></li>
          <li><a href="chisiamo.php">Chi siamo</a></li>
          <li><a href="lastoria.php">La Storia</a></li>
          <li><a href="denominazione.php">Denominazione prodotti</a></li>
        </ul>
      </div>
      <div id="stack2" class="Center">
        <div class="StackLine"></div>
        <h1>Orari di Consegna</h1>
        <p>0:00-24:00</p>
      </div>
      <div id="loginVend" class="Center">
        <div class="StackLine"></div>
        <div>
          <a href="../gestionale/login.php">Login Venditore</a>
        </div>
        <p id="firma" lang="en">Made with <span>&hearts;</span> by Giuseppe Zatta, Giovanni Incalza, Francesco Freda, Greta Cavedon.</p>
      </div>
      <div id="pagamenti" class="Center">
        <div class="StackLine"></div>
        <h1>Metodi di Pagamento:</h1>
        <img src="../img/512px/AmEx.png" alt="AmericanExpress" lang="en" />
        <img src="../img/512px/JCB.png" alt="JCB" lang="en" />
        <img id="mastercard" src="../img/512px/Mastercard.png" alt="Mastercard" lang="en" />
        <img id="paypal" src="../img/512px/PayPal.png" alt="Paypal" lang="en" />
        <img id="visa" src="../img/512px/Visa.png" alt="Visa" />
      </div>
    </footer>
  </body>
</html>

