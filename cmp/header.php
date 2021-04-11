<?php
  function navbar($pag){
    if($pag==1){
      echo ('
      <div class="container my-navbar">
        <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand logo">*logo*</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-nav">
          <a class="my_li nav-item active" href="lista_utenti.php">Lista utenti <span class="sr-only">(current)</span></a>
          <a class="my_li nav-item " href="lista_riviste.php">Lista riviste</a>
          <a class="my_li nav-item " href="lista_comuni.php">Lista comuni</a>
        </div>
        </nav>
      </div>');
    }
    if($pag==2){
      echo ('
      <div class="container my-navbar">
        <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand logo">*logo*</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-nav">
          <a class="my_li nav-item " href="lista_utenti.php">Lista utenti</a>
          <a class="my_li nav-item active" href="lista_riviste.php">Lista riviste  <span class="sr-only">(current)</span></a>
          <a class="my_li nav-item " href="lista_comuni.php">Lista comuni</a>
        </div>
        </nav>
      </div>');
    }
    if($pag==3){
      echo ('
      <div class="container my-navbar">
        <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand logo">*logo*</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-nav">
          <a class="my_li nav-item " href="lista_utenti.php">Lista utenti</a>
          <a class="my_li nav-item " href="lista_riviste.php">Lista riviste</a>
          <a class="my_li nav-item active" href="lista_comuni.php">Lista comuni <span class="sr-only">(current)</span></a>
          </div>
        </nav>
      </div>');
    }
  }
?>
