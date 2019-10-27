<?php

require_once 'Highway.php';

final class Motorway extends Highway
{
    public function addVehicule($foo)
    {
      if  ($foo instanceof Car)
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
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }
}
