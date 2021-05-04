<!DOCTYPE html>
<!--
<?php 
	session_start();
	if($_SESSION['userLogin'] != 'loggato'){
		header("Location: login.html");
	}
?>
-->


<head>
    <title id="TitoloUser"> Pagina Utente</title>
   <!-- <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-grid.min.css"> -->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/UserPage.css"> <!-- avevi messo il referenziamento alla cartella html quando la cartella del css sta già dentro la cartella html e quindi non lo trovava-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" href="Immagini/favicon1.png"> <!-- questa è l'iconcina che compare sulla scheda del browser-->
</head>

<body>
    <div  id="sfondo">
        <div class="row">
            <div class="col-md-3 border-right">
                <a href="homepage.php" id="pulsanteHomepage">Homepage</a>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5" id="immagineEMAIL">
                    <img class="rounded-circle mt-5"  height="130px" width="150px" src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331256__340.png">
                    <span class="font-weight-bold">Admin</span>
                    <span class="text-black-50">emailAdmin@gmail.com</span>
                    <span> </span></div>
            </div>


            <div class="col-md-5 border-right" id ="colonnaCentrale">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Impostazioni Profilo</h4>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels" >Nome</label><input type="text" class="form-control" placeholder="Nome" id="casellanome" onload="campiuser()"></div>
                        <div class="col-md-6"><label class="labels">Cognome</label><input type="text" class="form-control" value="" id="casellacognome" placeholder="Cognome"></div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Numero di telefono</label><input type="text" class="form-control" placeholder="Telefono" value=""></div>
                        <div class="col-md-12"><label class="labels">Indirizzo</label><input type="text" class="form-control" placeholder="Indirizzo" value=""></div>
                        <div class="col-md-12"><label class="labels">CAP</label><input type="text" class="form-control" placeholder="CAP" value=""></div>
                        <div class="col-md-12"><label class="labels">Città</label><input type="text" class="form-control" placeholder="Città" value=""></div>
                        <div class="col-md-12"><label class="labels">Tipo di Pilota</label> <form> <select>
                            
                            
                            <option value = "GPL"> GPL <!-- pilota d'aliante-->
                            </option>
                            <option value = "PPL"> PPL  <!-- pilota privato-->
                            </option>
                            <option value = "CPL"> CPL  <!-- pilota commerciale-->
                            </option>
                            <option value = "ATPL"> ATPL <!-- pilota di linea-->
                            </option>
                            <option value=" Elicotteri"> Elicotteri 
                            </option>
                            </select>
                          </form></div>
                          
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Regione</label><input type="text" class="form-control" placeholder="Regione" value=""></div>
                        <div class="col-md-6"><label class="labels">Paese</label><input type="text" class="form-control" value="" placeholder="Paese"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" onclick="campiUser()">Salva</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Ore Loggate di volo</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Esperienza</span></div><br>
                    <div class="col-md-12"><label class="labels">Su di me</label><input type="text" class="form-control"  value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="../Javascript/campiUser.js"> </script> <!-- link allo script per autocompilare i campi qualora fossero vuoti-->
    </body>