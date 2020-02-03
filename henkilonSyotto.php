<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Add employee</title>
<style>
body{width:40em;}
</style>
</head>
<body>
<h2>Add new employee</h2>
<form action="henkilonLisays.php" method="post">
<p>
<label>
<span class="selite">Number:</span>
<input type="text" name="henkilonumero" size="6" title="Required format: '001'" pattern="[0-9]{3}" required>
</label>
</p>
<p>
<label>
<span class="selite">First name:</span>
<input type="text" name="etunimi" size="20" required>
</label>
</p>
<p>
<label>
<span class="selite">Last name:</span>
<input type="text" name="sukunimi" size="20" required>
</label>
</p>
<label>
<span class="selite">Mobile phone:</span>
<input type="text" name="puhelin" size="20" title="Required format: '0401234567'" pattern="[0-9]{10,}" required>
</label>
</p>
<p>
<label>
<span class="selite">Department:</span>
<input type="text" name="osasto" size="20">
</label>
</p>
<p>
<label>
<span class="selite">Salary:</span>
<input type="text" name="palkka" size="10">
</label>
</p>
<p>
<input class="buttonValikko" name="muunna" type="submit"
value ="Save">
</p>
</form>
<p>
<a href="index.php"><button class="buttonValikko">Back to menu</button></a>
</p>
</body>
</html>