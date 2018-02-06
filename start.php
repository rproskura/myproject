<?php
echo "as";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Ala ma kota';

        // Komentarz
        # to też komentarz
// a tu nowa linia GIT
        //następna zmiana GIT
        /*
          Wiele wierszy
          komentarza
          ...
         */
        echo "<BR>";

        EcHo "czy wielkosć ma znaczenie?";
        //dla funkcji  i klas nie ma znaczenia

        echo "<BR>";
        $x = 1;
        $Y = 3.5;
        //ma znaczenie dla nazw zmiennych
        echo $x + $y;

        echo "<BR>";

        echo $x + $Y;

        $text = "Ala ma kota";
        echo "<BR>";
        echo "Zosia ma kurkę. " . $text;

        echo "<BR>";

        echo "Zosia ma kurkę. $text";


        $a = 10;
        $b = 20;
        $c;

        function przelicz() {
            $c = $a + $b;
        }
        przelicz();
        echo "<BR>";
        echo "1. Zmienna c ma wartość = $c";
        
        function przelicz2() {
            global $c, $a,$b;
            $c = $a + $b;
        }
        przelicz2();
        echo "<BR>";
        echo "2. Zmienna c ma wartość = $c";

        //wszystkie zmienne są przechowywane w tablicy $GLOBALS[]
        function przelicz3() {
            $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
        }
        przelicz3();
        echo "<BR>";
        echo "3. Zmienna c ma wartość = $c";
        
        //aby zmienna nie została usunięta po zakończeniu działania funkcji:
        function zachowajWartość() {
            //zmienną inicjalizuję się tylko raz
            static $d = 0;
            $d = $d + 30;
            echo "<BR>";
            print "d = $d";
        }
        zachowajWartość();
        zachowajWartość();
        zachowajWartość();
        
        //print zwraca wartość i przyjmuje tylko 1 arg
        //echo szybsze
        ?>

    </body>
</html>
