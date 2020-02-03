<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Search all</title>
</head>
<body>
<h2>All employees</h2>
<table>
<tr>
<th>Number</th>
<th>First name</th>
<th>Last name</th>
<th>Telephone</th>
<th>Department</th>
<th>Salary</th>
</tr>
<?php
require 'yhteydenAvaus.php';
$yhteydenhallinta = new YhteydenHallinta();
$henkilot = $yhteydenhallinta->suoritaHakuLause(
"select henkiloNumero,etunimi,"
. "sukunimi,puhelin, osasto,palkka from henkilosto");
foreach ($henkilot as $henkilo) {
?>
<tr>
<td><?php echo $henkilo['henkiloNumero'] ?></td>
<td><?php echo $henkilo['etunimi'] ?></td>
<td><?php echo $henkilo['sukunimi'] ?></td>
<td><?php echo $henkilo['puhelin'] ?></td>
<td><?php echo $henkilo['osasto'] ?></td>
<td><?php echo $henkilo['palkka'] ?></td>
</tr>
<?php
}
?>
</table>
<p>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</p>
</body>
</html>