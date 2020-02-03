<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
 
$conn = new mysqli("localhost", "root", "", "katta");
 $result = $conn->query("SELECT henkiloNumero,etunimi,sukunimi,osasto,palkka FROM ".$obj->table." LIMIT ".$obj->limit);
$outp = array();
 $outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>