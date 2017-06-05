<!DOCTYPE html>
<html lang="fr">
<head>
<title>SERDI CAMEROUN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid containSlide">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="imageR" src="images/pub_haut1.jpg" alt="Welcome">
        <div class="carousel-caption">
        	<div class="anim1Slide">
         		 BIENVENUE
        	</div>
        	<div class="anim2Slide">
         		 Qui sommes-nous?
       	    </div>
        	<div class="anim3Slide">
          		 En savoir + 
      		</div>
		</div>
	  </div>
	  
      <div class="item">
        <img class="imageR" src="images/pub_haut2.jpg" alt="Produits">
        <div class="carousel-caption">
        	<div class="anim1Slide">
          		NOS PRODUITS
        	</div>
        	<div class="anim2Slide">
         		Appui à la sécurité
        	</div>
        	<div class="anim3Slide">
          		En savoir +
        	</div>
      	</div>
      </div>
     
      <div class="item">
        <img class="imageR" src="images/pub_haut1.jpg" alt="Services">
        <div class="carousel-caption">
        	<div class="anim1Slide">
         		NOS SERVICES
        	</div>
        	<div class="anim2Slide">
          		Demandez votre service
        	</div>
        	<div class="anim3Slide">
          		En savoir +
        	</div>
      	</div>
	  </div>
	 
      <div class="item">
        <img class="imageR" src="images/pub_haut1.jpg" alt="Contact">
        <div class="carousel-caption">
        	<div class="anim1Slide">
          		NOS FORMATIONS
        	</div>
        	<div class="anim2Slide">
          		Votre formation personnalisée
        	</div>
        	<div class="anim3Slide">
          		En savoir +
        	</div>
      	</div>
     </div>
    </div>

     
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>
<br /> <br /> <br />
<script>
		// document ready
			jQuery(document).ready(function($){
				var hauteur = $(".carousel-inner").height();
				var y = $(".carousel-inner").position();
				var droit = y.right;
				var gauche = y.left;
				var demi = hauteur/2;
				var val = y.top - demi + 50;
				if(screen.width > 735){
					var val2 = val - 80;
					var val3 = val + 60;
				 
				}else{
					
					var val2 = val - 45;
					var val3 = val +30;
				}
				$(".anim1Slide").css({"top":val2});
				$(".anim1Slide").animate({"left": '300px'},"slow");
				$(".anim2Slide").css({"top":val});
				$(".anim3Slide").css({"top":val3});
				$(".anim3Slide").animate({"left": '300px'},"slow");
				
			});
			var compt = 0;
			//Slide animation
	var myVar = setInterval(myTimer, 5000);
	//setTimeout(myTimer, 3000);
	function myTimer() {
			$(".anim1Slide").css({"left":'0px'});
			$(".anim3Slide").css({"left":'0px'});
			$(".anim1Slide").animate({"left": '300px'},"slow");
			$(".anim3Slide").animate({"left": '300px'},"slow");
	}

</script>
</body>
</html>