<?php
include 'db.php';
$requete=" select * from scorer";
$result = $conn->query($requete);
$id = $_GET['id'];
while($row=$result->fetch_assoc())
{
    if($row['id'] == $id)
    {
        echo '<form  class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control m-2" id="name" name="name" value="'.$row['name'].'" required></td>';
        echo '<td><input type="number" class="form-control m-2" id="score" name ="score" value="'.$row['score'].'" required></td>'; 
        echo '<td><input type="text" class="form-control m-3" id="country" name ="country" value="'.$row['country'].'" required></td>'; 
       echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
     echo '<input type="hidden" name="id" value="'.$row['id'].'">';
    echo '</form>';

    }

    else {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['score']."</td>";
    echo "<td>".$row['country']."</td>";
    echo '<td><a class="btn btn-primary" href="index.php?id='.$row['id'].'" role="button"> Update</a></td>';
    echo '<td><a class="btn btn-danger" href="delete.php?id='.$row['id'].'" role="button"> Delete</a></td>';
    echo "</tr>";
}

}
$conn->close();
?>