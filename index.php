<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'Pedestianway.php';
require_once 'Residentialway.php';

$truck = new Truck('red' , 3,'electric',50);
$truck->setLoad(30);
$truck->addLoad(25);
$truck->isload();

$tesla = new Car('black',4,'fuel');

$autoroute = new Motorway();

$autoroute->addVehicule($tesla);
