<?php 

include_once '../connexion.php';

$sql = $connexion->prepare("UPDATE footer SET titre='TOM CLAMCY' WHERE id= 2");
$exec =$sql->execute();

header('Location: .../index.php');

?>