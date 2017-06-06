<header>
	<div class="container-fluid">
		<div class="row">
    		<div class="col-lg-8">
    		
      	<img src="images/logo.png" alt="logo" style="float: left;margin-left: 30px;"/>
      	<h2 id="titre">SOCIETE D&nbsp;'&nbsp;ETUDES &nbsp;DE &nbsp;&nbsp;RECHERCHE <br/> ET DEVELOPPEMENT INFORMATIQUE</h2>
      					<h4 id="slogan" style="margin-top: 20px;">INTEGRATEUR DE SOLUTIONS</h4>
      		</div>
    		<div class="col-lg-4">
    			<br />
    			<span id="barre"> | </span> <img src="Images/phone.png" alt="Téléphone" class="phone"/> <span id="barre2">|</span><span id="numero">+237 676 86 29 19</span>
    			<img src="Images/CMR.gif" alt="CMR" class="drapeau"/>
    		</div>
  		</div>
	</div>
</header>
<script>
		// document ready
			jQuery(document).ready(function($){
				if(screen.width < 735){
					var newTitle = "<h4 id='titre'>SOCIETE D\'ETUDES DE RECHERCHE <br/> ET DEVELOPPEMENT INFORMATIQUE</h4>";
					var newSlogan = "<br/> <h6 id='slogan'>INTEGRATEUR DE SOLUTIONS</h6>";
					$("#titre").remove();
					$("#slogan").before(newTitle);
					$("#slogan").remove();
					$("#titre").after(newSlogan);
				}
			});
	/*
	if(screen.width < 735){
		var newTitle = "<h5 id="titre">SOCIETE D&nbsp;'&nbsp;ETUDES DE RECHERCHE <br/> ET DEVELOPPEMENT INFORMATIQUE</h5>"
		$(#titre).remove();
		$(#slogan).before(newTitle);
	}
	*/
</script>