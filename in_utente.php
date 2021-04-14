<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inserisci utente</title>
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

    function stamp_abbonamenti(){
      if ($GLOBALS["check"]==1) {
  			$query="SELECT `Titolo` FROM `riviste` WHERE 1";
  			$result=mysqli_query($GLOBALS['conn'],$query);
  			$i=0;
  			if (mysqli_num_rows($result) > 0) {
  				 while($row = mysqli_fetch_assoc($result)){
  					 echo '
  					 <option value="'.$row["Titolo"].'">'.$row["Titolo"].'</option>';
  				 }
  			}
  		}
  		else {
  			echo "<script>console.log('Stamp abbonamenti failed')</script>";
  		}
    }

    function stamp_comuni(){
      if ($GLOBALS["check"]==1) {
  			$query="SELECT `Comune` FROM `comuni` WHERE 1";
  			$result=mysqli_query($GLOBALS['conn'],$query);
  			$i=0;
  			if (mysqli_num_rows($result) > 0) {
  				 while($row = mysqli_fetch_assoc($result)){
  					 echo '
  					 <option value="'.$row["Comune"].'">'.$row["Comune"].'</option>';
  				 }
  			}
  		}
  		else {
  			echo "<script>console.log('Stamp comuni failed')</script>";
  		}
    }
    ?>
  </head>
  <body>
    <script type="text/javascript" src="dist/in_utente.bundle.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/in_utente.css">

    <?php include("cmp/header.php");
    navbar(1);
    ?>
    <div class="container my-container-list">
      <form name="ins_form" action="cmp/ins_utente.php" method="post">
    	<div class="row">
      	<div class="col-md-4 font-size-3 font-bold font-roboto">Inserimento utente</div>
    	</div>
      <div class="row margin-row">
        <div class="col-md-4">
          <div class="container required">
            <div class="row">
              <div class="col-md-2 font-size-2 font-regular font-roboto color-1">
                Nome:
              </div>
            </div>
            <div class="row required">
              <div class="col-md-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
              </div>
            </div>
            <div class="row ">
              <div class="col-md-5 color-5 message" id="c-o-1">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-2 font-size-2 font-regular font-roboto color-1">
                Cognome:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Cognome">
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-row">
        <div class="col-md-4">
          <div class="container">
            <div class="row">
              <div class="col-md-2 font-size-2 font-regular font-roboto color-1">
                Email:
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-2 font-size-2 font-regular font-roboto color-1">
                Telefono:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="+39 123 456 7891">
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-row">
        <div class="col-md-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 font-size-2 font-regular font-roboto color-1">
                Tipo via:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <select class="form-control" id="type-address" name="type-address">
                  <option value="Via">Via</option>
                  <option value="Piazza">Piazza</option>
                  <option value="Corso">Corso</option>
                  <option value="Viala">Viale</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-6 font-size-2 font-regular font-roboto color-1">
                Nome via:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" id="address" name="address" placeholder="Nome via">
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-8 font-size-2 font-regular font-roboto color-1">
                N. civico:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="number" class="form-control" id="n-civico" name="n-civico" placeholder="30">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-row">
        <div class="col-md-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 font-size-2 font-regular font-roboto color-1">
                Comune:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <select class="form-control" id="comune" name="comune">
                  <?php stamp_comuni(); ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-6 font-size-2 font-regular font-roboto color-1">
                Abbonamento
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <select multiple class="form-control" id="abbonamento" name="abbonamento[]">
                  <?php stamp_abbonamenti(); ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 offset-md-1">
          <div class="container">
            <div class="row">
              <div class="col-md-8 font-size-2 font-regular font-roboto color-1">
                Data:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="date" class="form-control" id="date" name="date" placeholder="gg/mm/aaaa">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 color-5">
                *Campo obbligatorio
              </div>
            </div>
          </div>
        </div>
      </div>
  		<div class="row" style="margin-top: 30px;">
  			<div class="col-md-2">
  				<button class="btn btn-success btn-i-utente" type="submit" id="ins-utente" >Inserisci Utente</button>
  			</div>
        <div class="col-md-1">
  				<input class="btn btn-danger btn-i-annulla" value="Annulla" type="reset" id="annulla">
  		  </div>
      </form>
  	</div>
  </body>
</html>
