<?php

namespace Project;

use App\ClassesTask1\Garage;
use App\ClassesTask1\Car;
use App\ClassesTask2\ModernCar;
use App\ClassesTask2\ExtraGarage;
use App\ClassesTask2\ObdScanner;

class ITwareTest
{

	public $br;
	function __construct()
	{
		$this->br = (strpos(PHP_SAPI,'cli') === FALSE) ? "<br />".PHP_EOL : PHP_EOL; //Here I define the standard for break line I want to use. Since for cli is "\n" and for web is "<br>"
	}

	public function testTask1()
	{ 

		$numberOfCarsToBeParked = 6; // Define here the number of cars to be Parked //
		$garage1 = new Garage();
		$index = 0;

		echo "****** Task 1 *****";
		echo $this->br;
		$garage1->getGeneralStatus();
		echo $this->br;


		for ($i=0; $i < $numberOfCarsToBeParked; $i++) {

			$car[] = new Car();

			$car[$index]->start(); //Comment this line if you want to try park the car when it's not turned on. 

			$result = $car[$index]->park($garage1);

			var_dump($result);

			$index++;

			echo "\n";
		}

		$garage1->getGeneralStatus();
		echo $this->br;
	}

	/*Comment the block below you want to supress the test of the Task2*/

	public function testTask2()
	{

		$modernCar = new ModernCar();

		$extraGarage = new ExtraGarage();

		$obd = new ObdScanner();

		echo "****** Task 2 *****";
		echo $this->br;

		$extraGarage->getGeneralStatus();

		$modernCar->start(); /* Comment if you want to check the unparking process with the Car turned off */

		var_dump($modernCar->unpark($extraGarage));

		$extraGarage->getGeneralStatus(); /* Here I am showing the the changes in the Garage variables after the Car has been Unparked */

		echo $this->br;
		$resultDiagnoseModernCar = $obd->diagnose($modernCar);
		echo $this->br;

		var_dump($modernCar->park($extraGarage));		

		$extraGarage->getGeneralStatus(); // Status of the Garage after the car has been parked back. 

		var_dump($resultDiagnoseModernCar); //Retuning array with the simulated Trouble Codes of the OBD Scanner

	}

}