<?php echo '<b>Au fost alese urmatoarele cărți:</b><br>';

foreach ($_POST as $item) {
    echo($item) . "<br>";
}

$summa=0;
( !isset($_POST['d1'])) ? $summa+=0 : $summa+=200;
( !isset($_POST['d2'])) ? $summa+=0 : $summa+=250;
( !isset($_POST['d3'])) ? $summa+=0 : $summa+=300;
( !isset($_POST['d4'])) ? $summa+=0 : $summa+=100;
( !isset($_POST['d5'])) ? $summa+=0 : $summa+=75;
( !isset($_POST['d6'])) ? $summa+=0 : $summa+=250;

echo '<br><b>Suma totală:</b>'.$summa;