
<center>
<h1>Create data</h1>
<form action='' method="post">
<p>Dust Value:<input type="text" name="Dust"autofocus></p>

<p>Sound Value:<input type="text" name="Sound"autofocus></p>
<p>Temperature:<input type="text" name="Temp"autofocus></p>
<p>Humidity:<input type="text" name="Hum"autofocus></p>
<input type="submit">


</form>



<?php
require 'database.php';
if ( !empty($_POST)) {
    $Readings = $_POST['Dust'];

$pdo = Database::connect();

$sql = "INSERT INTO dust_values (Readings) values(?)";
$q = $pdo->prepare($sql);
$q->execute(array($Readings));}
// Database::disconnect();
//  header("location:project.php");
if ( !empty($_POST)) {
    $Sound = $_POST['Sound'];

$sql = "INSERT INTO sound (Readings) values(?)";
$q = $pdo->prepare($sql);
$q->execute(array($Sound));}


if ( !empty($_POST)) {
    $Sound = $_POST['Temp'];

$sql = "INSERT INTO temperature (Readings) values(?)";
$q = $pdo->prepare($sql);
$q->execute(array($Sound));}

if ( !empty($_POST)) {
    $Sound = $_POST['Hum'];

$sql = "INSERT INTO humidity (Readings) values(?)";
$q = $pdo->prepare($sql);
$q->execute(array($Sound));


Database::disconnect();
header("location:index.php");
}


?>





