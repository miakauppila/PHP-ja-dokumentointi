<?php
class YhteydenHallinta {
private $yhteys;
private $konfiguraatiotiedosto;
public function __construct(
$kantaKonfiguraatio = 'yhteyskonfiguraatio.ini') {
$this->konfiguraatiotiedosto = $kantaKonfiguraatio;
}
private function avaaYhteys() {
$init = parse_ini_file($this->konfiguraatiotiedosto, true);
$ajuri = $init['tietokanta']['ajuri'];
$palvelin = $init['tietokanta']['palvelin'];
$portti = $init['tietokanta']['portti'];
$kanta = $init['tietokanta']['kanta'];
$kayttaja = $init['tietokanta']['kayttaja'];
$salasana = $init['tietokanta']['salasana'];
$url = "{$ajuri}:host={$palvelin};port={$portti};dbname={$kanta}";
try {
$this->yhteys = new PDO($url, $kayttaja, $salasana,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
return $this->yhteys;
} catch (PDOException $e) {
echo $e->getMessage();
header("Location: virhe.php");
}
}
public function suoritaHakuLause($sqlLause,
$parametritaulukko = Array()) {
$this->avaaYhteys();
//valmistellaan hakukysely
$suoritettavaLause = $this->yhteys->prepare($sqlLause);
//liitetään arvot taulukosta merkityn parametrin tilalle ja
//suoritetaan kysely
$suoritettavaLause->execute($parametritaulukko);
//haetaan tulostaulukko
$tulostaulukko = $suoritettavaLause->fetchAll(PDO::FETCH_ASSOC);
$this->suljeYhteys();
return $tulostaulukko;
}
public function suoritaPaivitysLause($sqlLause,
$parametritaulukko = Array()) {
$this->avaaYhteys();
try {
$suoritettavaLause = $this->yhteys->prepare($sqlLause);
$suoritettavaLause->execute($parametritaulukko);
$lkm = $suoritettavaLause->rowCount();
$this->suljeYhteys();
} catch (PDOException $e) {
$lkm = 0;
}
return $lkm;
}
private function suljeYhteys() {
$this->yhteys = null;
}
}