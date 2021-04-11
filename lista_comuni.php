<!DOCTYPE html>
<html>
<head>
	<title>
		Lista Comuni
	</title>
</head>
<body class="bg-color-4">
	<script type="text/javascript" src="dist/lista_riviste.bundle.js"></script>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/lista_riviste.css">

	<?php include("cmp/header.php");
	navbar(3);
	?>
	<div class="container my_description">
	<div class="row">
		<div class="col-sm-8  color-1 font-size-1 font-regular font-roboto">
		<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	</div>
	<div class="container my-container-list">
  	<div class="row">
    	<div class="col-sm-2 font-size-2 font-bold font-roboto">Lista Comuni</div>
  	</div>
	  	<?php
			for ($i=0; $i < 1; $i++) {
				echo '
				<div class="row my-row-list bg-color-2">
			    <div class="col-sm-4 td">Bari</div>
					<div class="col-sm-6 td">BA</div>
					<div class="col-sm-2 td"><a class="user-modification" href="#">👀</a><a class="user-modification" href="#">✏</a><a class="user-modification" href="#">🗑</a></div>
			  </div>
        <div class="row my-row-list bg-color-3">
			    <div class="col-sm-4 td">Naboli</div>
					<div class="col-sm-6 td">NA</div>
					<div class="col-sm-2 td"><a class="user-modification" href="#">👀</a><a class="user-modification" href="#">✏</a><a class="user-modification" href="#">🗑</a></div>
			  </div>';
			};
			?>
		<div class="row">
			<div class="col-2">
				<a class="btn btn-success btn-i-utente" href="#">Inserisci comune</a>
			</div>
		</div>
	</div>
</body>
</html>
