<!DOCTYPE html>

<?php 
	session_start();
	if($_SESSION['userLogin'] != 'loggato'){
		header("Location: login.html");
	}
?>

<head>
    <title>FT-crea piano di Volo</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/FlightPlan.css">
    <link rel="icon" href="Immagini/favicon.png"> <!-- questa è l'iconcina che compare sulla scheda del browser-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<!-- NOTA: per arrivare a questa pagina bisogna far si che l'utente sia registrato. Se non lo è la pagina non deve essere accessibile-->
<body>
    <div id='titolo'>
        <a class="homepage" href="homepage.php">Homepage</a>
        <h1 class='registra'> Registra piano di volo</h1>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <form class="pianodivolo">

        <label for="nome"> Nome:</label>
        <input type="text" id="nomePilota">
        <br>

        <label for="cognome"> Cognome:</label>
        <input type="text" id="cognomePilota">
        <br>

        <label for="tipovolo"> Tipo volo:</label>
        <input type="radio" id="VFR" name="VFR" value="VFR">
        <label for="male">VFR</label>
        <input type="radio" id="IFR" name="IFR" value="IFR">
        <label for="female">IFR</label><br>

        <label for="partenza"> Aeroporto di partenza:</label>
        <input type="text" id="aeroportopartenza"><br>

        <input type="button" id="invertiCampi" value="INVERTI" style="margin-left: 450px;" onclick="invertiCasellaTesto()"> <!-- il pulsante per invertire i due campi-->
        <br>
        <label for="destinazione"> Aeroporto di destinazione:</label>
        <input type="text" id="aeroportodestinazione">

    </form>

    <script src = "../Javascript/inverti.js"></script>   <!-- il link allo script per invertire il contenuto delle due caselle di testo partenza/arrivo-->


    <script src="../Javascript/cambiaSfondo.js"></script>
</body>
</html>