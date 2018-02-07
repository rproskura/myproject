<?php
$data = array("Anna", "Piotr", "Maria", "Krzysztof", "Katarzyna", "Andrzej", "Małgorzata", "Jan","Rafał",
    "Agnieszka", "Stanisław", "Barbara", "Tomasz", "Krystyna", "Paweł", "Ewa", "Marcin", "Elżbieta"
    , "Michał", "Zofia", "Marek", "Teresa", "Grzegorz", "Magdalena", "Józef", "Joanna", "Łukasz", "Janina", "Adam", "Monika"
    , "Zbigniew", "Danuta", "Jerzy", "Jadwiga", "Tadeusz", "Aleksandra", "Mateusz", "Halina", "Dariusz", "Irena", "Mariusz");

$txt = $_GET["litera"];

$info = "";

if ($txt !== "") {
    $txt = strtolower($txt);
    $len = strlen($txt);


    foreach ($data as $name) {
        if (stristr($name, $txt)) {
            if ($info == "") {
                $info = $name;
            } else {
                $info .= ", $name";
            }
        }
    }
}
echo $info === "" ? "brak sugestii" : $info;
?>