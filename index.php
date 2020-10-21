<?
include "Avion.php";
include "Autobus.php";

//======= Scene 1 ======//
$avion = new Avion("Airbus", 128, 500);
if($avion->startRuta(400)){
    echo "Avionul a decolat. <br>";
};

//======= Scene 2 ======//
$autobus = new Autobus("Mercedes", 20, 100);
$autobus->startRuta(550);

//======= Scene 3 ======//
$avion2 = new Avion("Airbus", 128, 800);
if($avion2->startRuta(400)){
    echo "Avionul a decolat. <br>";
    $avion2->combustibilRamas();
};
?>