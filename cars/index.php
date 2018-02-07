<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/footable.standalone.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/mystyles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/moment.js"></script>
        <script src="js/footable.min.js"></script>
        <script src="js/myscript.js"></script>
    </head>
    <body>
        <div class="main table-responsive">
            <?php
//        error_reporting(0);
            $conn = mysqli_connect('beje.kylos.pl', 'beje_php', '!Qwe123!@', 'beje_samochody', '3306');
            if (!$conn) {
                die('Could not connect to MySQL: ' . mysqli_connect_error());
            }
            mysqli_query($conn, 'SET NAMES \'utf8\'');
            echo '<table class="samochody table-striped table-condensed table-hover" data-paging="true" data-sorting="true" data-filtering="true">';
            echo '<thead><tr>';
            echo '<th data-breakpoints="xs">ID</th>';
            echo '<th data-breakpoints="xs sm">Marka_pojazdu</th>';
            echo '<th>Cena</th>';
            echo '<th data-breakpoints="xs sm md">Rocznik</th>';
            echo '<th data-breakpoints="xs">Rodzaj_paliwa</th>';
            echo '<th>Kolor</th>';
            echo '</tr></thead>';
            echo "<tbody>";
            $tag = 'data-expanded="true"';
            $result = mysqli_query($conn, 'SELECT Marka_pojazdu, Cena, Rocznik, Rodzaj_paliwa, Kolor FROM samochody');
            $num_row = 1;
            while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                echo '<tr ' . $tag . '>';
                echo '<td>' . $num_row++ . '</td>';
                echo '<td>' . $row['Marka_pojazdu'] . '</td>';
                echo '<td>' . $row['Cena'] . '</td>';
                echo '<td>' . $row['Rocznik'] . '</td>';
                echo '<td>' . $row['Rodzaj_paliwa'] . '</td>';
                echo '<td>' . $row['Kolor'] . '</td>';
                echo '</tr>';
                $tag = "";
            }
            mysqli_free_result($result);
            echo "</tbody>";
            echo '</table>';

            mysqli_close($conn);
            ?>
        </div>

    </body>
</html>
