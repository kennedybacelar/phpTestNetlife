<?php

namespace App\ClassesTask2;

include_once("App/InterfacesTask2/ObdDiagnosticToolInterface.php");
use App\InterfacesTask2\ObdDiagnosticToolInterface;
use App\InterfacesTask2\ObdCompatibleVehicleInterface;
use App\ClassesTask2\ModernCar;
use Exception;

Class ObdScanner implements ObdDiagnosticToolInterface
{

	public $vehicle;
	public $arrayTroubleCodes = array();

	public function diagnose (ModernCar $vehicle)
	{
		$this->vehicle = $vehicle;
		try {
			if ($this->vehicle->carParked) {
				throw new Exception("Please, Unpark the car", 1);
			} else {
				$diagnoseResult = $this->distinctRandom(2); //Set 2 if you want the second version of the OBD Scanner
				return $diagnoseResult;
			}
		} catch (Exception $error) {
			echo $error->getMessage();
			return false;
		}
	}


	public function distinctRandom($obdVersion)
	{

		if ($obdVersion == 1) {
			$obdVersionFile = "App/CsvFiles/obd1.csv";
		} elseif ($obdVersion == 2) {
			$obdVersionFile = "App/CsvFiles/obd2.csv";
		}

		$maxTroubleCodes = 5;
		for($i = 0; $i < $maxTroubleCodes; $i++) {
			$randomCode = rand(0,149);
			if(!in_array($randomCode, $this->arrayTroubleCodes)) {
			    $arrayTroubleCodes[] = $randomCode;
			}
		}

		try {
		    if(!$obdCodes = fopen($obdVersionFile, 'r')) {
		    	throw new Exception("File obdVersion.csv is not available", 1);
		    } else {
		    	while($fileLine = fgetcsv($obdCodes,';')) {
		    		$arrayDescriptionTroubleCodes[] = $fileLine;
		    	}
		    	foreach ($arrayTroubleCodes as $descriptionTroubleCodeIndex) {
		    	    var_dump($arrayDescriptionTroubleCodes[$descriptionTroubleCodeIndex]);
		    	    echo "\n";
		    	}
		    	return $arrayTroubleCodes;
		    }
		} catch (Exception $errorDistinctRandom) {
			echo $errorDistinctRandom->getMessage();
			return false;
		}

		return $arrayTroubleCodes;
	}
	
}