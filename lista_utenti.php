<!DOCTYPE html>
<html>
<head>
	<title>
		Lista Utenti
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
				$query="SELECT * FROM `abbonati` WHERE 1";
				$result=mysqli_query($GLOBALS['conn'],$query);
				$i=0;
				//SELECT A.`Id_Abbonato`,A.`Id_Rivista`, B.`Id_Abbonato`, B.`nome`,C.`Id_Rivista`,c.`Titolo` FROM `sottoscrizioni`A, `abbonati`B, `riviste`C WHERE A.`Id_Abbonato`= B.`Id_Abbonato` AND A.`Id_Abbonato`= 1 AND A.`Id_Rivista` = C.`Id_Rivista`
				if (mysqli_num_rows($result) > 0) {
					 while($row = mysqli_fetch_assoc($result)) {
						 if ($i%2==0) {
						 	$color="bg-color-2";
						 }
						 else {
						 	$color="bg-color-3";
						 }
						 $id=$row["Id_Abbonato"];
						 $query2="SELECT A.`Id_Abbonato`,A.`Id_Rivista`, B.`Id_Abbonato`, B.`nome`,C.`Id_Rivista`,C.`Titolo` FROM `sottoscrizioni`A, `abbonati`B, `riviste`C WHERE A.`Id_Abbonato`= B.`Id_Abbonato` AND A.`Id_Abbonato`= $id AND A.`Id_Rivista` = C.`Id_Rivista`";
						 $result2=mysqli_query($GLOBALS['conn'],$query2);
						 echo '
						 <div class="row my-row-list '.$color.'">
		 			    <div class="col-sm-2 td">'.$row['Nome'].' '.$row['Cognome'].'</div>
		 					<div class="col-sm-3 td">'.$row['Tipo_Via'].' '.$row['Nome_Via'].' '.$row['Numero_Civico'].'</div>
		 					<div class="col-sm-5 td">';
							while ($row2 = mysqli_fetch_assoc($result2)) {
		 						echo $row2["Titolo"]."--";
		 					};
							echo '</div>
		 					<div class="col-sm-2 td"><a class="user-modification" href="dett_utente.php">👀</a><a class="user-modification" href="#">✏</a><a class="user-modification" href="#">🗑</a></div>
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
<body>
	<script type="text/javascript" src="dist/lista_utenti.bundle.js"></script>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/lista_utenti.css">
	<?php include("cmp/header.php");
	navbar(1);
	?>
	<div class="container my_description color-1 font-size-1 font-regular font-roboto">
	<div class="row">
		<div class="col-sm-8">
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	</div>
	<div class="container my-container-list">
  	<div class="row">
    	<div class="col-sm-2 font-size-2 font-bold font-roboto">Lista Utenti</div>
  	</div>
	  	<?php
			stampa_lista();
			?>
		<div class="row">
			<div class="col-sm-2">
				<a class="btn btn-success btn-i-utente" href="in_utente.php">Inserisci utente</a>
			</div>
		</div>
	</div>
</body>
</html>
