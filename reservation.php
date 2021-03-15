<?php

include_once"_head_inc.php";
?>

<title>Reservation</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="reservation_css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="reservation_css/style.css" />

	<div id="booking" class="section">
	<div class="section-center">
	<div class="container">
		<div class="row">
                <div class="col-md-7 col-md-push-5">
		<div class="booking-cta">
		<h1>Faites votre réservation</h1>
	<p>  </p>
		</div>
		</div>
		<div class="col-md-4 col-md-pull-7">
		<div class="booking-form">
	<form>
		<div class="form-group">
		<span class="form-label"></span>
                <span class="form-label">Ville de départ</span>
	<input class="form-control" type="text" placeholder="Entrez une ville de départ" required>
        
        <span class="form-label">Ville d'arrivé</span>
        <input class="form-control" type="text" placeholder="Entrez une ville d'arrivé" required>
	</div>
	<div class="row">
	<div class="col-sm-6">
	<div class="form-group">
	<span class="form-label">Date de début de réservation</span>
	<input class="form-control" type="date" required>
</div>
	</div>
 <div class="col-sm-6">
		<div class="form-group">
	<span class="form-label">Date de fin de réservation</span>
	<input class="form-control" type="date" required></div>
	</div>
			<div class="col-sm-4">

			</div>
			<div class="form-btn">
                            <button class="submit-btn">Valider</button>
				</div>
				</form>
				</div>
				</div>
		</div>
		</div>
		</div>
	</div>

          