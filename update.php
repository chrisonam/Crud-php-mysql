<?php
 include 'db.php';
 $id =$_POST['id'];
 $name =$_POST['name'];
 $score =$_POST['score'];
 $country=$_POST['country'];

 $requete = "update scorer set name='$name', score='$score',country='$country' where id =$id";
 $result = $conn->query($requete);
 $conn->close();
 header('location: index.php');
?>