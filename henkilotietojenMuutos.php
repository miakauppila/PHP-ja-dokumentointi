<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Update employee</title>
</head>
<?php
require 'yhteydenAvaus.php';
$yhteydenhallinta = new YhteydenHallinta();
$henkilonumero = htmlspecialchars(trim($_POST['henkilonumero']),
ENT_QUOTES, 'UTF-8');
$etunimi = htmlspecialchars(trim($_POST['etunimi']), ENT_QUOTES,'UTF-8');
$sukunimi = htmlspecialchars(trim($_POST['sukunimi']), ENT_QUOTES,'UTF-8');
$puhelin = htmlspecialchars(trim($_POST['puhelin']), ENT_QUOTES,'UTF-8');
$osasto = htmlspecialchars(trim($_POST['osasto']), ENT_QUOTES, 'UTF-8');
$palkka = htmlspecialchars(trim($_POST['palkka']), ENT_QUOTES, 'UTF-8');
$lkm = $yhteydenhallinta->suoritaPaivitysLause(
"update henkilosto set etunimi=?,"
. " sukunimi=?, puhelin=?, osasto=?,palkka=? where henkiloNumero=?",
Array($etunimi, $sukunimi, $puhelin, $osasto, $palkka, $henkilonumero));
?>
<body>
<?php if ($lkm > 0) { ?>
<h3>Update successfull</h3>
<?php } else { ?>
<h3>Nothing was updated</h3>
<?php } ?>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</body>
</html>