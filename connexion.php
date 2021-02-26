<?php

$age = NULL;
$country = NULL;
$place = NULL;
$dDepart = NULL;
$hDepart = NULL;
$dReturn = NULL;
$hReturn = NULL;


$acceptedCountries = ["FRANCE", "UK", "'USA", "SPAIN"];


if (isset($_POST["age"]) && $_POST['age'] > 18) {

    $age = $_POST['age'];
}

if (isset($_POST['country']) && in_array(strtoupper($_POST['coutry']), $acceptedCountries)) {
    $country = htmlspecialchars($_POST['country']);
}


if (isset($_POST['dDepart']) && preg_match("#^\d{4}-\d\d-\d\d$#", $_POST['dDepart']) && isset($_POST['dReturn']) && preg_match("#^\d{4}-\d\d-\d\d$#", $_POST['dReturn'])) {
    $dDepart = htmlspecialchars($_POST['dDepart']);
    $dReturn = htmlspecialchars($_POST['dReturn']);
}


if (isset($_POST['dDepart']) && preg_match("", $_POST['dReturn'])) {
    $dReturn = htmlspecialchars($_POST['dReturn']);
}

//creation du tableau pour retour de la 

$tab = array(
    'age' => $age,
    'country' => $country,
    'place' => $place,
    'dReturn' => $dreturn,
    'dDepart' => $dDepart,
    'hDepart' => $hDepart,
    'hReturn' => $hReturn
);


echo json_encode($tab);
