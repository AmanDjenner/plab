<?php
// $cofe = $_POST['cofe'];
// echo ($_POST['cofe']);

// // if ($cofe == 'Cafea'){
// //     echo ('a  fost alesa cafeaua');
// // }
// // echo ($_POST['mesage-f1']);
if (isset($_POST['pizza']) || isset($_POST['suc']) || isset($_POST['inghetata']) || isset($_POST['cofe'])) {
    echo ("<b>Au fost alese urmatoarele produse : </b><br>");
    foreach ($_POST as $item) {
        echo $item . "<br>";
    }
} else {
    echo ("Nu au fost alese produse" . "<br>");
}
if ($_POST['mesage-f1'] != "") {
    echo ("Mesajul este : " . $_POST['mesage-f1']);
} else {
    echo ("Mesajul  nu a fost introdus. ");
}