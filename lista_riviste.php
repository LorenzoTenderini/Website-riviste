<!DOCTYPE html>
<html>
<head>
	<title>
		Lista Riviste
	</title>
	<?php
	$GLOBALS['conn'] = mysqli_connect("localhost", "root","","casa_editrice");
	$GLOBALS['check'] = 0;
	if (!$GLOBALS['conn']) {
		echo "<script />console.log('Connection db failed')</script>";
	}
	else {
		echo "<script>console.log('Connection db succesfully')</script>";
		$GLOBALS['check'] = 1;
	}

	function stampa_lista(){

		if ($GLOBALS["check"]==1) {
			$query="SELECT * FROM `riviste` WHERE 1";
			$result=mysqli_query($GLOBALS['conn'],$query);
			$i=0;
			if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
					 if ($i%2==0) {
						$color="bg-color-2";
					 }
					 else {
						$color="bg-color-3";
					 }
					 echo '
					 <div class="row my-row-list '.$color.'">
					 <div class="col-sm-2 td">'.$row["Titolo"].'</div>
					 <div class="col-sm-3 td">'.$row["Descrizione"].'</div>
					 <div class="col-sm-3 td">'.$row["Periodicita"].'</div>
						<div class="col-sm-2 td">'.$row["Prezzo"].'€</div>
					 <div class="col-sm-2 td"><a class="user-modification" href="#">👀</a><a class="user-modification" href="#">✏</a><a class="user-modification" href="#">🗑</a></div>
					 </div>';
					 $i++;
				 }
			}
		}
		else {
			echo "<script>console.log('Stamp failed')</script>";
		}
	}
	?>
</head>
<body class="bg-color-4">
	<script type="text/javascript" src="dist/lista_riviste.bundle.js"></script>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/lista_riviste.css">

	<?php include("cmp/header.php");
	navbar(2);
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
    	<div class="col-sm-2 font-size-2 font-bold font-roboto">Lista Riviste</div>
  	</div>
	  	<?php
			stampa_lista();
			?>
		<div class="row">
			<div class="col-2">
				<a class="btn btn-success btn-i-utente" href="#">Inserisci rivista</a>
			</div>
		</div>
	</div>
</body>
</html>
