<?php
// injection de la base des donnees
 include 'db.php';
 $name =$_POST['name'];
 $score = $_POST['score'];
 $country=$_POST['country'];

$requete =  "INSERT INTO scorer (name, score, country) VALUES ('$name', '$score','$country')";

$conn-> query($requete);
$conn-> close();
header("location: index.php");
?>