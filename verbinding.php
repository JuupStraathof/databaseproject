<?php

    $server="localhost";
    $user="root";
    $wachtwoord="biah36";
    $database="stagebedrijven";
    
    
    //verbinding maken met mysql database service
    
    $con = new mysqli ($server,$user,$wachtwoord,$database);

    if ($con-> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
    }
  ?>