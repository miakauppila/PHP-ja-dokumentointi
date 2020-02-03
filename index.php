<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="tyylit.css" type="text/css">
<style>
    body{width: 15em;}
</style>

<title>Main menu</title>

<script>
function naytaValinta(valittuSivu) {
document.menu.action = valittuSivu;
document.menu.submit();
}
</script>
</head>
<body>
<h1>Main menu</h1>
<form name="menu" method="post">
<button onclick="naytaValinta('haeKaikki.php')">
All employees
</button>
<button onclick="naytaValinta('henkilonSyotto.php')">
Add employee
</button>
<button onclick="naytaValinta('poisto.php')">
Delete employee
</button>
<button onclick="naytaValinta('haeMuutettava.php')">
Update employee
</button>
<button onclick="naytaValinta('tkanta.html')">
All employees (JSON)
</button>
</form>
</body>
</html>