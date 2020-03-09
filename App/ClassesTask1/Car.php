<?php

namespace App\ClassesTask1;

use App\ClassesTask1\Car;
use App\InterfacesTask1\CarInterface;
use App\ClassesTask1\Garage;
use Exception;

include_once("App/InterfacesTask1/CarInterface.php");

Class Car implements CarInterface
{

    public $started = false;
    public $garage;

	public function start()
	{
	    $this->started = true;
		return $this->started;	
	}	

	public function stop()
	{
		$this->started = false;
		return $this->started;
	}

	public function park(Garage $garage)
	{

	include_once("Garage.php");

	$this->garage = $garage;

	try {
	    if (!$this->started == true) {
		    throw new Exception("Car is not on");
		} else {
			return $this->garage->park($this);
		} 
	} catch (Exception $error) {
		    echo $error->getMessage();
		    return false;
		}
	}
}
