<!DOCTYPE html>
<html>
	<head>
		<!-- BootStrap css -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css") ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/all.css") ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css.map"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-grid.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-grid.min.css.map"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-reboot.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-reboot.min.css.map"); ?>" />
		<title><?php echo($title);?></title>
	</head>
	<body>

		<!-- réaliser une condition pour afficher le menu pour les membres ou un autre menu pour les utilisateurs publics -->

		<!-- NavBar pour tout les utilisateurs -->
		<nav class="navbar navbar-dark bg-dark">
		  <a class="navbar-brand" href="<?php echo site_url("visiteur/visiteur_index") ?>">
		  	<img src="<?php echo base_url("assets/img/MaPhotoLink.png") ?>" width="250" height="70" alt="">
		  </a>
		    <ul class="nav-item text-center">
			  <a href="<?php echo site_url("member/member_identification"); ?>"><button class="btn btn-outline-success" type="button">Connexion</button></a>
			  <a href="<?php echo site_url("visiteur/visiteur_installer"); ?>"><button class="btn btn-outline-secondary" type="button">S'inscrire</button></a>
		    </ul>		  
		</nav>	