<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Update employee</title>
</head>
<body>
<h3>Change employee data</h3>
<?php
require 'yhteydenAvaus.php';
$yhteydenhallinta = new YhteydenHallinta();
$henkilonumero = htmlspecialchars(trim($_POST['henkilonumero']),
ENT_QUOTES, 'UTF-8');
//suoritetaan sql-kysely
$haettava = $yhteydenhallinta->suoritaHakuLause(
"select henkiloNumero,etunimi,sukunimi,"
. "puhelin,osasto,palkka from henkilosto where henkiloNumero=?",
Array($henkilonumero));
//jos haettavaa henkilöä ei löydy tietokannasta
if(empty($haettava)){
    echo "The employee number entered does not exist in the database.";
}
//jos henkilö löytyi
//tulostetaan lomakkeen kenttiin muutettavan henkilön tiedot 
else {
    $muutettavaHenkilo = $haettava[0];
    // print_r($haettava);
    echo "
    <form action='henkilotietojenMuutos.php' method='post'>
    <p>
    <label>
    <span class='selite'>Number:</span>
    <input type='text'
    name='henkilonumero'
    size='6' readonly='true'
    value='$muutettavaHenkilo[henkiloNumero]'>
    </label>
    </p>
    <p>
    <label>
    <span class='selite'>First name:</span>
    <input type='text' name='etunimi' size='20'
    value='$muutettavaHenkilo[etunimi]'>
    </label>
    </p>
    <p>
    <label>
    <span class='selite'>Last name:</span>
    <input type='text' name='sukunimi' size='20'
    value='$muutettavaHenkilo[sukunimi]'>
    </label>
    </p>
    <p>
    <label>
    <span class='selite'>Telephone:</span>
    <input type='text' name='puhelin' size='20'
    value='$muutettavaHenkilo[puhelin]'>
    </label>
    </p>
    <p>
    <label>
    <span class='selite'>Department:</span>
    <input type='text' name='osasto' size='20'
    value='$muutettavaHenkilo[osasto]'>
    </label>
    </p>
    <p>
    <label>
    <span class='selite'>Salary:</span>
    <input type='text' name='palkka' size='10'
    value='$muutettavaHenkilo[palkka]'>
    </label>
    </p>
    <p>
    <input class='buttonValikko' name='muunna' type='submit'
    value='Update'>
    </p>
    </form>
    ";
}
?>

<!-- <form action="henkilotietojenMuutos.php" method="post">
<p>
<label>
<span class="selite">Number:</span>
<input type="text"
name="henkilonumero"
size="6" readonly="true"
value="<?php echo $muutettavaHenkilo['henkiloNumero'] ?>">
</label>
</p>
<p>
<label>
<span class="selite">First name:</span>
<input type="text" name="etunimi" size="20"
value="<?php echo $muutettavaHenkilo['etunimi'] ?>">
</label>
</p>
<p>
<label>
<span class="selite">Last name:</span>
<input type="text" name="sukunimi" size="20"
value="<?php echo $muutettavaHenkilo['sukunimi'] ?>">
</label>
</p>
<p>
<label>
<span class="selite">Telephone:</span>
<input type="text" name="puhelin" size="20"
value="<?php echo $muutettavaHenkilo['puhelin'] ?>">
</label>
</p>
<p>
<label>
<span class="selite">Department:</span>
<input type="text" name="osasto" size="20"
value="<?php echo $muutettavaHenkilo['osasto'] ?>">
</label>
</p>
<p>
<label>
<span class="selite">Salary:</span>
<input type="text" name="palkka" size="10"
value="<?php echo $muutettavaHenkilo['palkka'] ?>">
</label>
</p>
<p>
<input class="buttonValikko" name="muunna" type="submit"
value ="Update">
</p>
</form> -->

<p>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</p>
</body>
</html>