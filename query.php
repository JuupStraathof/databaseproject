<?php
include 'connectionphp.php';


try{
    $sql = "SELECT * FROM bedrijfs_gegevens ";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>bedrijfsNummer</th>";
                echo "<th>bedrijfsNaam</th>";
                echo "<th>straat</th>";
                echo "<th>postcode</th>";
                echo "<th>plaats</th>";
                echo "<th>email</th>";
                echo "<th>telefoon</th>";
                echo "<th>website</th>";
                echo "<th>geaccrediteerd</th>";
                echo "<th>stages 2 jaar</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['bedrijfs_nummer'] . "</td>";
                echo "<td>" . $row['bedrijfs_naam'] . "</td>";
                echo "<td>" . $row['bedrijfs_straat'] . "</td>";
                echo "<td>" . $row['bedrijfs_postcode'] . "</td>";
                echo "<td>" . $row['bedrijfs_plaats'] . "</td>";
                echo "<td>" . $row['bedrijfs_email'] . "</td>";
                echo "<td>" . $row['bedrijfs_website'] . "</td>";
                echo "<td>" . $row['geaccrediteerd'] . "</td>";
                echo "<td>" . $row['stages_2_jaar'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}







?>