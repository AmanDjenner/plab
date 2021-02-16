<?
$suma = 0;
$i=0;
$end_element = array_pop($_POST);
$el5=$end_element;
    unset($end_element);
foreach ( $_POST as $item) {

    $suma += floatval($item);
    $i++;
}
// echo($suma/$i);
// echo($el5);
// MC = 0,6 * MNDP + 0,4 * MNEA
$mc = (0.6 * $suma/$i)+(0.4 *$el5);
echo($mc);