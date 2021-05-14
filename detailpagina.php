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
        </ul>
    </nav>

    <?php
    $bedrijfsnummer = $_POST['detailverstopt'];
    include("verbinding.php");
    $query = "SELECT * FROM bedrijfs_gegevens WHERE bedrijfs_nummer =" . $bedrijfsnummer;
    $resultaat = mysqli_query($con, $query);

    ?>
    <div class="center">
        <h1> gegevens bedrijf</h1>
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


            </tr>

            <?php
            while ($rij = mysqli_fetch_array($resultaat)) {

                echo "<tr><td>$rij[bedrijfs_nummer]</td>";
                echo "<td>$rij[bedrijfs_naam]</td>";
                echo "<td>$rij[bedrijfs_straat]</td>";
                echo "<td>$rij[bedrijfs_postcode]</td>";
                echo "<td>$rij[bedrijfs_plaats]</td>";
                echo "<td>$rij[bedrijfs_email]</td>";
                echo "<td>$rij[bedrijfs_telefoon]</td>";
                echo "<td>$rij[bedrijfs_website]</td>";
                echo "<td>$rij[geaccrediteerd]</td>";
                echo "<td>$rij[stages_2_jaar]</td>";
            }

            ?>

        </table>
    </div>
    <?php
    include("verbinding.php");
    $query = "SELECT * FROM contactpersonen_gegevens WHERE bedrijfs_nummer =" . $bedrijfsnummer;
    $resultaat = mysqli_query($con, $query);
    ?>
    <div class="center">
        <table border="1">
            <h1>contact personen</h1>
            <tr>
                <td>cp_id</td>
                <td>voornaam</td>
                <td>tussenvoegsel</td>
                <td>achternaam</td>
                <td>telefoon</td>
                <td>email</td>
                <td>werkzaam?</td>
            </tr>

            <?php
            while ($rij =  mysqli_fetch_array($resultaat)) {


                echo "<tr><td>$rij[bedrijfs_nummer]</td>";
                echo "<td>$rij[contactpersoon_id]</td>";
                echo "<td>$rij[contactpersoon_voornaam]</td>";
                echo "<td>$rij[contactpersoon_achternaam]</td>";
                echo "<td>$rij[contactpersoon_telefoon]</td>";
                echo "<td>$rij[contactpersoon_email]</td>";
                echo "<td>$rij[contactpersoon_werkzaam]</td>";
            }
            ?>






            <?php
            $bedrijfsnummer = $_POST['detailverstopt'];
            include("verbinding.php");
            $query = "SELECT * FROM bedrijfs_gegevens AS t1
            INNER JOIN stage_basisinfo AS t2
            ON (t1.stage_id = t2.stage_id)
            INNER JOIN stage_gegevens AS t3
            ON (t1.student_id = t3.student_id)
            INNER JOIN leerling_gegevens AS t4
            ON (t1.student_id = t4.student_id)
            WHERE t1.bedrijfs_nummer =" . $bedrijfsnummer;
            echo "$query";
            
            $resultaat = mysqli_query($con, $query);
        

            ?>




            <div class="center">
                <table border="1">
                    <h1>stages</h1>
                    <tr>

                        <td>stage_id</td>
                        <td>schooljaar</td>
                        <td>soortstage</td>
                        <td>duur</td>
                        <td>accredatie_nodig</td>
                        <td>crebo</td>
                        <td>student_id</td>
                        <td>voornaam</td>
                        <td>achternaam</td>
                        <td>nova_studentnummer</td>
                        <td>begindatum</td>


                    </tr>

                    <?php
                    while ($rij =  mysqli_fetch_array($resultaat)) {


                        echo "<tr><td>$rij[stage_id]</td>";
                        echo "<td>$rij[student_id]</td>";
                        echo "<td>$rij[school_jaar]</td>";
                        echo "<td>$rij[begin_datum]</td>";
                        echo "<td>$rij[duur]</td>";
                        echo "<td>$rij[accredatie]</td>";
                        echo "<td>$rij[crebo]</td>";
                    }
                    ?>
</body>





</div>
</div>
</div>
</div>
</body>
<html>