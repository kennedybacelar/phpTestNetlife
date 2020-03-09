<?php

namespace App\ClassesTask1;
include_once("Car.php");
use Exception;

Class Garage
{

	public $totalCapacity = 5;
	public $availableParkingSpaces = 5;
	public $occupiedParkingSpaces = 0;
	public $car;

	public function getTotalCapacity()
	{
		return $this->totalCapacity;
	}

	public function getAvailableParkingSpaces()
	{
		return $this->availableParkingSpaces;
	}

	public function getOccupiedParkingSpaces()
	{
		return $this->occupiedParkingSpaces; 
	}

	public function getGeneralStatus()
	{
		$br = (strpos(PHP_SAPI,'cli') === FALSE) ? "<br />".PHP_EOL : PHP_EOL;
		echo 'Total Capacity - '.$this->getTotalCapacity();
		echo $br;
		echo 'Available Parking Spaces - '.$this->getAvailableParkingSpaces();
		echo $br;
		echo 'Occupied Parking Spaces - '.$this->getOccupiedParkingSpaces();
		echo $br;
	}

	public function park(Car $car)
	{
		$this->car = $car;
		try {
			if(!$this->car->started) {

				throw new Exception("Car is not on");

			} elseif ($this->availableParkingSpaces < 1) {

				throw new Exception("There is no parking spaces availables");

			} else {

			    $this->availableParkingSpaces--;
			    $this->occupiedParkingSpaces++; 
			    echo "car has been parked";
			    return true;

			}
		} catch(Exception $e) {
			echo $e->getMessage();
			return false;
		}


	}

}
