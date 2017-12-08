<!DOCTYPE html>
  <html>
    <head>
	  <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <header>
    	<ul id="accident_drop_down_side" class="dropdown-content">
    	  <li class="divider"></li>
		  <li><a href="prevenir.html" class="center">Prévenir</a></li>
		  <li class="divider"></li>
		  <li><a href="signalerIHM.php" class="center">Signaler</a></li>
		  <li class="divider"></li>
		  <li><a href="asister.html" class="center">Assiter</a></li>
		</ul>
		<ul id="accident_drop_down_top" class="dropdown-content center">
		  <li class="divider"></li>
		  <li><a href="prevenir.html" class="center">Prévenir</a></li>
		  <li class="divider"></li>
		  <li><a href="signalerIHM.php" class="center">Signaler</a></li>
		  <li class="divider"></li>
		  <li><a href="asister.html" class="center">Assiter</a></li>
		</ul>
		<ul id="compte_drop_down_top" class="dropdown-content">
    	  <li class="divider"></li>
		  <li><a href="event.html" class="center">Évènements</a></li>
		  <li class="divider"></li>
		  <li><a href="#!" class="center">Options</a></li>
		  <li class="divider"></li>
		  <li><i href="#!" class="material-icons center">power_settings_new</i></li>
		</ul>
		<ul id="compte_drop_down_side" class="dropdown-content">
    	  <li class="divider"></li>
		  <li><a href="event.html" class="center">Évènements</a></li>
		  <li class="divider"></li>
		  <li><a href="#!" class="center">Options</a></li>
		  <li class="divider"></li>
		  <li><i href="#!" class="material-icons center">power_settings_new</i></li>
		</ul>

    	<nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">Logo</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_top">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_top">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_side">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_side">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
		      </ul>
		    </div>
  		</nav>
    </header>

    <body>
    	
	    	<div class="container">
		    		<div class="row">

						<?php
                        try {
                            $bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'nuitinfo');
                        } catch (Exception $e) {
                            echo '<div class="col s12 m4">
		    				<h2 class="header">Erreur :(</h2>
		    				<div class="card-panel teal">
		    					<a style="color: black" href="mailto:contact@jeanyves.pro">
		    					<div class="row">
		    						<div class="col s2 m2">
							              <i class="material-icons large white responsible">directions_car</i>
		    						</div>
		    					</div>
		    					<div class="row">
		    						<div class="col s3 m3">
		    							<table class="centered">
		    								<tr>
		    									<th>Erreur de serveur :(</th>
		    									<td>La base de données rencontre des difficultés.</td>
		    								</tr>
		    								<tr>
		    									<th>Vous pouvez nous le signaler en envoyant un mail ici :</th>
		    									<td><a href="mailto:contact@jeanyves.pro">contact@jeanyves.pro</a></td>
		    								</tr>
		    							</table>
		    						</div>
		    					</div>
		    					</a>			          
					        </div>
					        
		    			</div>';
                        }

                        $reponse = $bdd->query('SELECT * FROM EVENTS');
                        while ($donnees = $reponse->fetch()) {
                            echo '<div class="col s12 m4">
		    				<h2 class="header">' . $donnees['nom'] . '</h2>
		    				<div class="card-panel teal">
		    					<a style="color: black" href="' . $donnees['site'] . '">
		    					<div class="row">
		    						<div class="col s2 m2">
							              <i class="material-icons large white responsible">directions_car</i>
		    						</div>
		    					</div>
		    					<div class="row">
		    						<div class="col s3 m3">
		    							<table class="centered">
		    								<tr>
		    									<th>Début</th>
		    									<td>' . $donnees['debut'] . '</td>
		    								</tr>
		    								<tr>
		    									<th>Fin</th>
		    									<td>' . $donnees['fin'] . '</td>
		    								</tr>
		    							</table>
		    						</div>
		    					</div>
		    					</a>			          
					        </div>
					        
		    			</div>';
                        }
						?>
		    			<div class="col s12 m4">
		    				<h2 class="header"> Nom</h2>
		    				<div class="card-panel teal">
		    					<a style="color: black" href="">
		    					<div class="row">
		    						<div class="col s2 m2">
							              <i class="material-icons large white responsible">directions_car</i>
		    						</div>
		    					</div>
		    					<div class="row">
		    						<div class="col s3 m3">
		    							<table class="centered">
		    								<tr>
		    									<th>Début</th>
		    									<td>00/00/0000</td>
		    								</tr>
		    								<tr>
		    									<th>Fin</th>
		    									<td>00/00/0000</td>
		    								</tr>
		    							</table>
		    						</div>
		    					</div>
		    					</a>			          
					        </div>
					        
		    			</div>

	    			</div>

    		</div>
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	 $(".button-collapse").sideNav();
      </script>
      
    </body>
  </html>