<?php

namespace App\ClassesTask2;

include_once("App/InterfacesTask2/ObdCompatibleVehicleInterface.php");
use App\InterfacesTask2\ObdCompatibleVehicleInterface;
use App\InterfacesTask2\ObdDiagnosticToolInterface;
use App\ClassesTask1\Car;
use Exception;

Class ModernCar extends Car implements ObdCompatibleVehicleInterface
{
	public $carParked = true; // true means that car is parked
	public $extraGarage;
	public $arrayTroubleCodes = array();
	public $tool;

	public function unpark(ExtraGarage $extraGarage)
	{
		$this->extraGarage = $extraGarage;

		try {

		    if(!$this->started) {

		    	throw new Exception("Car is not on");

		    } elseif (!$this->carParked) {

		    	throw new Exception("Car is already unparked");

		    }else {

		        $this->extraGarage->availableParkingSpaces++;
		        $this->extraGarage->occupiedParkingSpaces--;
		        $this->carParked = false;
		        echo "Car has been unparked";
		        return true;
		    } 
		} catch (Exception $error) {
			echo $error->getMessage();
			return false;
		}
	}

	public function diagnose(ObdDiagnosticToolInterface $tool)
	{
		$this->tool = $tool;
	}


	public function distinctRandom()
	{
		$maxTroubleCodes = 5;
		for($i = 0; $i < $maxTroubleCodes; $i++) {
			$randomCode = rand(1,150);
			if(!in_array($randomCode, $this->arrayTroubleCodes)) {
			    $arrayTroubleCodes[] = $randomCode;
			}
		}
		return $arrayTroubleCodes;
	}

}