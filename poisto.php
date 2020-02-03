<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Delete employee</title>
</head>
<body>
<h2>Delete employee</h2>
<form method="post">
<p>
<label>
Give the number of the employee to be deleted:
<input name="henkilonumero" size="6" required>
</label>
<input name="poista" type="submit" value ="Delete">
</p>
</form>
<h3>All employees</h3>
<table>
<tr> <th>Number</th>
<th>First name</th>
<th>Last name</th>
</tr>
<?php
require 'yhteydenAvaus.php';
$yhteydenhallinta = new YhteydenHallinta();
if (isset($_POST['poista'])) {
$henkilonumero =
htmlspecialchars(trim($_POST['henkilonumero']),
ENT_QUOTES, 'UTF-8');
$poistoLkm = $yhteydenhallinta->suoritaPaivitysLause(
"delete from henkilosto where henkiloNumero=?",
Array($henkilonumero));
header("Location: poisto.php");
} 
else {
$henkilot = $yhteydenhallinta->suoritaHakuLause(
"select henkiloNumero,etunimi, sukunimi from henkilosto");
foreach ($henkilot as $henkilo) {
?>
<tr>
<td><?php echo $henkilo['henkiloNumero'] ?></td>
<td><?php echo $henkilo['etunimi'] ?></td>
<td><?php echo $henkilo['sukunimi'] ?></td>
</tr>
<?php
}
}
?>
</table>
<p>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</p>
</body>
</html>