<?php

session_start();

?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />                                        
	
	<title>Autójavítás</title>
	
	<style>
		body {
    min-height: 75rem;
    padding-top: 4.5rem;
	}
	</style>

</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Autójavítás</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=osszes_javitas.php">Javítás-összes</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=javitott_tipusok.php">Javított típusok</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=javitasi_idok.php">Javítási idők</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=uj_auto_tipus.php">Új autó típus</a></li>
		</ul>
	</div>
</nav>  

<div class="tarolo">
    <?php
        if(isset($_GET["p"])){
            include $_GET["p"];
        }
        else{
            include ("fooldal.php");
        }
    ?>
	 <script src="bootstrap/jquery.min.js"></script>
	 <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>