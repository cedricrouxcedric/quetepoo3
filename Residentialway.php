<?php

require_once 'Highway.php';

final class Residentialway extends Highway
{
    public function addVehicule($foo)
    {
            $currentVehicles[] = $foo;
            $message = 'Vehicle allow in Motorway';
            return $message ;
    }

    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }
}