<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Add employee</title>
</head>
<body>
<?php
require 'yhteydenAvaus.php';
$yhteydenhallinta = new YhteydenHallinta();
//haetaan tiedot lomakkeen kentistä
$henkilonumero = htmlspecialchars($_POST['henkilonumero']);
$etunimi = htmlspecialchars($_POST['etunimi']);
$sukunimi = htmlspecialchars($_POST['sukunimi']);
$puhelin = htmlspecialchars($_POST['puhelin']);
$osasto = htmlspecialchars($_POST['osasto']);
$palkka = htmlspecialchars($_POST['palkka']);
// tarkistetaan että pakolliset kentät eivät ole tyhjiä
if(empty($henkilonumero) || empty($etunimi) || empty($sukunimi) || empty($puhelin)){
    print("<h3>Please fill in the employee data.</h3>");
}
else {
//suoritetaan lisäyskysely jos pakolliset tiedot ok
$lisattyLkm = $yhteydenhallinta->suoritaPaivitysLause(
    "insert into henkilosto "
    . "(henkiloNumero, etunimi, sukunimi, puhelin, osasto, palkka) "
    . "values (?,?,?,?,?,?)",
    Array($henkilonumero, $etunimi, $sukunimi, $puhelin, $osasto, $palkka));

    //jos lisättiin uusi työntekijä, printataan tiedot
    if ($lisattyLkm > 0) {
    print("<h3>Employee number ". $henkilonumero. " added.</h3>");
    //tai virheviesti
    } else {
    print("<h3>It was not possible to add the employee.</h3>");
    }
}
?>

<p>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</p>
</body>
</html>