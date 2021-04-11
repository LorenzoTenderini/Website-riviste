<!DOCTYPE html>
<html>
<head>
	<title>
		Dettaglio utente
	</title>
</head>
<body>
	<script type="text/javascript" src="dist/dett_utente.bundle.js"></script>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/dett_utente.css">

	<?php include("cmp/header.php");
	navbar(1);
	?>
	<div class="container my_description color-1 font-size-1 font-regular font-roboto">
    <div class="row font-size-3 color-1 font-bold font-roboto">
      <div class="col-sm-11">
        Dettaglio *nome utente*
      </div>
      <div class="col-sm-1" style="text-align: right;">
        #ID
      </div>
    </div>
  	<div class="row" style="margin-top: 50px;">
  		<div class="col-sm-8 font-size-1 color-1 font-roboto font-regular">
        <div class="container" style="padding: 0px;">
          <div class="row attributes">
            <div class="col-sm-12">
              Mail: esempio@dominio.it
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-12">
              Telefono: +39 123 456 7891
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-12">
              Via: *nome via*
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-12">
              Comune: *nome comune*
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-12">
              Città: *nome città*
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-container-list font-merriweather color-1">
    <div class="row">
      <div class="col-sm-6">
        <div class="container bg-color-2">
          <div class="row">
            <div class="col-sm-6 font-size-5 font-bold">
              *Nome rivista*
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Data abbonamento: <font class="font-bold">gg/mm/aaaa</font>
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Fine abbonamento: <font class="font-bold">gg/mm/aaaa</font>
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Giorni mancanti: <font class="font-bold">gg</font>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="container bg-color-2">
          <div class="row">
            <div class="col-sm-6 font-size-5 font-bold">
              *Nome rivista*
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Data abbonamento: <font class="font-bold">gg/mm/aaaa</font>
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Fine abbonamento: <font class="font-bold">gg/mm/aaaa</font>
            </div>
          </div>
          <div class="row attributes">
            <div class="col-sm-8 font-size-2">
              Giorni mancanti: <font class="font-bold">gg</font>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 50px;">
      <div class="col-sm-2">
        <button class="btn btn-success btn-i-utente" href="#">Inserisci utente</button>
      </div>
      <div class="col-sm-2">
        <button class="btn btn-danger btn-i-elimina" href="#">Elimina</button>
      </div>
    </div>
  </div>
</body>
</html>
