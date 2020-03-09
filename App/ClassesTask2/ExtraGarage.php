<?php

namespace App\ClassesTask2;

use App\ClassesTask1\Garage;

/*Extra Garage starts with the parking spaces already occupied */

Class ExtraGarage extends Garage
{
    public $totalCapacity = 1;
    public $availableParkingSpaces = 0;
    public $occupiedParkingSpaces = 1;
}
