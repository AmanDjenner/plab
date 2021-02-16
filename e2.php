<?php
// $cofe = $_POST['cofe'];
// echo ($_POST['cofe']);

// // if ($cofe == 'Cafea'){
// //     echo ('a  fost alesa cafeaua');
// // }
// echo ($_POST['mesage-f1']);



if (!empty($_POST['f2_nume'])) {
    echo ('<b>Numele:</b> ' . $_POST['f2_nume']) . "<br>";
}
if (!empty($_POST['f2_numar'])) {
    echo ('<b>Tel. : </b>' . $_POST['f2_numar']) . "<br>";
}

if (empty($_POST['f2_ranchio'] || $_POST['f2_vegetarian'] || $_POST['f2_piperoni'])) {
    if (empty($_POST['f2_nume'])) {
        echo ('Pizza nu a fost aleasa');
    } else {
        echo ("D-nul " . $_POST['f2_nume'] . " va rugam sa alegeti PIZZA.<br>");
    }
} else {

    echo ('<b>Pizza aleasa : </b><br>');
    if (!empty($_POST['f2_piperoni'])) {
        echo $_POST['f2_piperoni'] . "<br>";
    }
    if (!empty($_POST['f2_vegetarian'])) {
        echo $_POST['f2_vegetarian'] . "<br>";
    }
    if (!empty($_POST['f2_ranchio'])) {
        echo $_POST['f2_ranchio'] . "<br>";
    }
    echo ('<b>Sos pentru pizza: </b>' . $_POST['select1']);
}
// if (!empty($_POST)) {
//     foreach ($_POST as $item) {
//         echo $item . "<br>";
//     }
// }