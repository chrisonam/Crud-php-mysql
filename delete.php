<?php
 include 'db.php';
$id = $_GET['id'];

 $requete = "delete from scorer where id ='$id'";
 $result = $conn->query($requete);
 $conn->close();
 header('location: index.php');
?>