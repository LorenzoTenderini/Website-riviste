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

    function inserisci(){
      echo "ciao";
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
      <form onsubmit="document.write('<?php inserisci();?>');" method="post">
    	<div class="row">
      	<div class="col-md-4 font-size-3 font-bold font-roboto">Inserimento utente</div>
    	</div>
      <div class="row margin-row">
        <div class="col-md-4">
          <div class="container">
            <div class="row">
              <div class="col-md-2 font-size-2 font-regular font-roboto color-1">
                Nome:
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                <input type="text" class="form-control " id="name" placeholder="Nome">
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
                Cognome:
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" id="surname" placeholder="Cognome">
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
                <input type="email" class="form-control" id="email" placeholder="Email">
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
                <input type="text" class="form-control" id="phone" placeholder="+39 123 456 7891">
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
                <select class="form-control" id="type-address">
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
                <input type="text" class="form-control" id="address" placeholder="Nome via">
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
                <input type="number" class="form-control" id="n-civico" placeholder="30">
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
                <input type="text" class="form-control" id="comune" placeholder="Nome comune">
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
                <select multiple class="form-control my-form" id="abbonamenti">
                  <option>Outpump</option>
                  <option>Oggi</option>
                  <option>Vogue</option>
                  <option>Moto.it</option>
                  <option>Auto.it</option>
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
                <input type="date" class="form-control" id="date" placeholder="gg/mm/aaaa">
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
