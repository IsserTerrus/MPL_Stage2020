<!DOCTYPE html>
<html>
	<head>
		<!-- BootStrap css -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css.map"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-grid.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-grid.min.css.map"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-reboot.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-reboot.min.css.map"); ?>" />
		<title>MaPhoto.Link</title>
	</head>
	<body>


		<!-- NavBar pour les membres connectés -->	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="<?php echo base_url("application/views/public/public_index.php") ?>">
		  	<!--MaPhoto.Link -->
		  	<img src="<?php echo base_url("assets/img/MaPhotoLink.png") ?>" width="250" height="70" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto text-center">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Votre profil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Vos photos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Vos albums</a>
		      </li>     			            		      
		    </ul>
		    <ul class="nav-item text-center">
			  <a href="<?php echo base_url("application/views/member/member_identification"); ?>"><button class="btn btn-outline-success" type="button">Déconnexion</button></a>
		    </ul>
		  </div>
		</nav>
		 

