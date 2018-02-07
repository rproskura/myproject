<?php

#  tabela z samochodami jest pod adresem:
#  www.beje.pl/www/samochody.csv



$conn = mysqli_connect('beje.kylos.pl', 'beje_php', '!Qwe123', 'beje_samochody', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');

$result = mysqli_query($conn, 'SELECT DISTINCT Marka_pojazdu FROM samochody');

$txt = $_GET["find"];
$info = "";
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {

    if ($txt !== "") {
        $txt = strtolower($txt);
        if (stristr($row['Marka_pojazdu'], $txt)) {
            if ($info == "") {
                $info = $row['Marka_pojazdu'];
            } else {
                $info .= ", " . $row['Marka_pojazdu'];
            }
        }
    }
}
echo $info === "" ? "brak sugestii" : $info;
mysqli_free_result($result);
mysqli_close($conn);

