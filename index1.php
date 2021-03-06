<!DOCTYPE html>
<html>
<head>
<title> Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


</head>
<body>

<div class="row main">

	<div class="col-4">
		<div class="nav">
		<h1> Łukasz Kaleta </h1>
		<p> front-end webdeveloper</p>
			
			<ul>
				<li><a href="#" id="about"><i class="fa fa-user-o" aria-hidden="true"></i> O mnie </a></li>
				<li><a href="#" id="skills"><i class="fa fa-code" aria-hidden="true"></i>Umiejętności </a></li>
				<li><a href="#" id="portfolio"><i class="fa fa-id-card-o" aria-hidden="true"></i>Portfolio </a></li>
				<li><a href="#" id="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i>Kontakt </a></li>
			</ul>
		</div>
	</div>
	
	<div class="col-8">
		<div class="content">
			<h2> O mnie </h2>
			<p> Witam. Zajmuję się tworzeniem stron internetowych oraz systemów do zarządzania treścią opratych o Wordpress. Znam dobrze takie technologie jak HTML5, język CSS3 opisujący wygląd strony, RWD - technologię tworzenia responsywnych stron internetowych oraz język JavaScript, pozwalający na tworzenie interaktywnych stron internetowych. Potrafię również tworzyć proste programy okienkowe korzystając z narzędzia Lazarus i języka object pascal. W zakładce <a href="#content-portfolio" id="portfolio-about">"Portfolio" </a>można zobaczyć moje projekty. Obecnie szukam pracy jako Front-End Developer.  </p>
		</div>
		
		<div class="content">
			<h2> Umiejętnościi </h2>
			<div class="skills"> 
      			<h3> HTML</h3>
      			<figure>
        			<img src="images/html5.png" alt="html5">
        			<figcaption> HTML 5</figcaption>
      			</figure>
      			<figure>
        			<img src="images/css3.png" alt="cs3">
        			<figcaption> CSS3</figcaption>
      			</figure> 
      			<figure>
        			<img src="images/sass.png" alt="sass">
        			<figcaption> SASS</figcaption>
      			</figure>
      			<figure>
        			<img src="images/bootstrap.png" alt="bootstrap">
        			<figcaption> Bootstrap</figcaption>
      			</figure>
			</div>
			
			<div>
				<h3> JavaScript</h3>
				<img src="http://andrewborstein.github.io/portfolio/static/img/javascript.png" alt="cs3">
			
				<img src="http://andrewborstein.github.io/portfolio/static/img/jquery.png" alt="cs3">
			</div>
			
			<div>
				<h3> Wordpress </h3>
				<img src="http://andrewborstein.github.io/portfolio/static/img/wordpress.png" alt="cs3">
			</div>
			
			<div>
				<h3> GIT </h3>
				<img src="http://andrewborstein.github.io/portfolio/static/img/github.png" alt="cs3">
			</div>
				
		</div>
		
		<div class="content">
			<h2> Portfolio </h2>
			<div>
				<figure>
        			<a href="https://lukasz341.github.io/Project3/" target="_blank"><img src="images/Projekt1.png" alt="Projekt 1"></a>
        			<figcaption> Projekt 1</figcaption>
				</figure> 

			</div>

			<div>
				<figure>
        			<a href="https://lukasz341.github.io/Project3/" target="_blank"><img src="images/Projekt2.png" alt="Projekt 2"> </a>
        			<figcaption> Projekt 2</figcaption>
      			</figure> 

			</div>

			<div>
				<figure>
        			<a href="https://lukasz341.github.io/Project3/" target="_blank"><img src="images/Projekt3.png" alt="Projekt 3"></a>
        			<figcaption> Projekt 3</figcaption>
      			</figure> 

			</div>
		</div>
		
		<div class="content">
		
            <form method="POST" action="form.php">
			 	<h3>Formularz kontaktowy</h3>
			 	<table>
			 		<tr>
  						<td>Imię: </td><td><input type="text" name="imie"></td>
  					</tr>
  					<tr>
  						<td>Twój email:</td><td><input type="text" name="email"></td>
  					</tr>
  					<tr>
  				<td>Wiadomość:</td><td><textarea rows="4" cols="50"  name="wiadomosc"></textarea></td>
  				</tr>
  				<tr>
  					<td></td><td><input type="submit" value="Wyślij" id="submit"></td>
  					
  				</tr>
  				</table>
			</form> 

		</div>
	</div>
</div>
<footer>
	<h4> Copyright @ Łukasz Kaleta 2017 </h4>
</footer>


<script src="js/scripts.js"></script>
</body>
</html>