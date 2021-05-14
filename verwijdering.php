<?php
include'verbinding.php';

$bedrijfsnummer = $_POST['verwijder'];

try{
    
    $sql = "DELETE FROM bedrijfs_gegevens WHERE bedrijfs_nummer =" .$bedrijfsnummer;   
    $result = $con->query($sql);
    echo "het bedrijf is verwijderd";
    
   
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


?>