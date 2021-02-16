<?
if ($_POST['mesage-f1'] != "") {
    echo ("<b>Mesajul este : </b>" . $_POST['mesage-f1'] . "<br>" . "<br>");
} else {
    echo ("<b style='color:red'>Mesajul  nu a fost introdus.</b> <br> ");
}

if (isset($_POST['pizza']) || isset($_POST['suc']) || isset($_POST['inghetata']) || isset($_POST['cofe'])) {
    echo ("<b>Au fost alese urmatoarele produse : </b><br>");
    $end_element = array_pop($_POST);
    unset($end_element);
    foreach ($_POST as $item) {

        echo $item . "<br>";
    }
} else {
    echo ("<b style='color:red'>Nu au fost alese produse" . "</b> <br>");
}