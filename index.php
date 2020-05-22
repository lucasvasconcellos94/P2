<?php
include('informações.php');
$seriados = getSeriados();
foreach ($seriados as $seriado) {
   echo "<img src='{$seriado->image->medium}'><br>";
   echo"<h3>{$seriado->name}</h3><br>";
}
// var_dump($seriados);
?>