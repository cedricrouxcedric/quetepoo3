<?php

require_once 'Highway.php';

final class Pedestianway extends Highway
{
    public function addVehicule($foo)
    {
        if  (($foo instanceof Bicycle) or ($foo instanceof Skateboard))
        {
            $currentVehicles[] = $foo;
            $message = 'Vehicle allow in Motorway';
        } else {
            $message = 'Vehicle not allow in Motorway';
        }
        return $message ;
    }

    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }
}