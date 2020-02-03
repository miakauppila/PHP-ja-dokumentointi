<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<title>Error message</title>
</head>
<body>
<h3>Error in the program</h3>
<form method="post">
<p>
<input class="buttonValikko" name="haku" type="submit" value ="Back to the menu">
</p>
</form>
<?php
if (isset($_POST['haku'])) {
header("Location: index.php");
}
?>
</body>
</html>