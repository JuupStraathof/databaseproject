<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>nova's stage db</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    .content {
        padding: 15px;
        font-size: 18px;
        min-height: 50px;
        margin-bottom: 15px;
        margin-left: 15px;
        margin-right: 15px;
    }

    .achtergrond {
        background: rgb(1, 102, 128);
    }

    .woord {
        word-spacing: 5px;
    }

    .warning {
        color: crimson;
    }
</style>

<body>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <a class="navbar-brand" href="#">nova's stage db</a>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="frontpage.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="frontpage.php">invoeren</a>
            </li>
        </ul>
    </nav>

            <?php
    include("verbinding.php");   
    $query="SELECT * FROM bedrijfs_gegevens";
    $resultaat=mysqli_query($con,$query);
?>
<div class="center">
<h1> Overzicht klanten</h1>
<table border="1">
<tr>

<td>bedrijfsnummer</td>
<td>naam</td>
<td>straat</td>
<td>postcode</td>
<td>plaats</td>
<td>email</td>
<td>telefoon</td>
<td>website</td>
<td>geaccrediteerd</td>
<td>stages afgelopen 2 jaar</td>
<td>wijzig</td>
<td>wijzeging</td>
<td>verwijder</td>


</tr>

<?php
while ($rij =  mysqli_fetch_array($resultaat)) {
      

        echo"<tr><td>$rij[bedrijfs_nummer]</td>";
        echo"<td>$rij[bedrijfs_naam]</td>";
        echo"<td>$rij[bedrijfs_straat]</td>";
        echo"<td>$rij[bedrijfs_postcode]</td>";
        echo"<td>$rij[bedrijfs_plaats]</td>";
        echo"<td>$rij[bedrijfs_email]</td>";
        echo"<td>$rij[bedrijfs_telefoon]</td>";
        echo"<td>$rij[bedrijfs_website]</td>";
        echo"<td>$rij[geaccrediteerd]</td>";
        echo"<td>$rij[stages_2_jaar]</td>";
        
        echo "<td><form action='detailpagina.php' method ='post'>
            
                <input type='hidden' name='detailverstopt' value='$rij[bedrijfs_nummer]'> 
                <input type = 'submit' name='details' value='details'>
                </form></td>";
        
        
            echo "<td><form action='wijzeigen.php' method ='post'>
                <input type='hidden' name='verwijder' value='$rij[bedrijfs_nummer]'>
                <input type = 'submit' name='verwijderen' value='wijzeging'>             
                
            </form></td>";
            echo "<td><form action='verwijdering.php' method ='post'>
                <input type='hidden' name='verwijder' value='$rij[bedrijfs_nummer]'>
                <input type = 'submit' name='verwijderen' value='verwijder'>             
                
            </form></td></tr>";
 }
?>
</table>
</div>
    </body>
</html>


            </html>

        </div>
    </div>
    </div>
    </div>
</body>

</html>