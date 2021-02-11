<?php
// $cofe = $_GET['cofe'];
//  echo ($_GET['cofe']);

// // if ($cofe == 'Cafea'){
// //     echo ('a  fost alesa cafeaua');
// // }
// // echo ($_GET['mesage-f1']);
if (isset($_GET['pizza']) || isset($_GET['suc'])|| isset($_GET['inghetata']) || isset($_GET['cofe'])){
echo ("Au fost alese urmatoarele produse : ");
    echo ($_GET['pizza'] ."<br>");
echo ($_GET['suc'] ."<br>");
echo ($_GET['inghetata'] ."<br>");
echo ($_GET['cofe'] ."<br>");
}else{
    echo("Nu au fost alese produse" ."<br>");
}
if($_GET['mesage-f1'] != ""){
        echo ("Mesajul este : " .$_GET['mesage-f1']);
        }else{
            echo ("Mesajul  nu a fost introdus. " );
        }


`
