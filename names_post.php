<?php
// Tablica imion
$a = array("Anna","Piotr","Maria","Krzysztof","Katarzyna","Andrzej","Małgorzata","Jan",
"Agnieszka","Stanisław","Barbara","Tomasz","Krystyna","Paweł","Ewa","Marcin","Elżbieta"
,"Michał","Zofia","Marek","Teresa","Grzegorz","Magdalena","Józef","Joanna","Łukasz","Janina","Adam","Monika"
,"Zbigniew","Danuta","Jerzy","Jadwiga","Tadeusz","Aleksandra","Mateusz","Halina","Dariusz","Irena","Mariusz");
// pobierz parametr z URL
if (isset($_POST['litera']) {
	$q = $_POST['litera'];
	$hint = "";
	// szukanie odpowiedników imion 
	if ($q !== "") {
		$q = strtolower($q);
		$len=strlen($q);
		foreach($a as $name) {
			if (stristr($q, substr($name, 0, $len))) {
				if ($hint === "") {
					$hint = $name;
				} else {
					$hint .= ", $name";
				}
			}
		}
	}
	echo $hint === "" ? "brak sugestii" : $hint;
}
?>