<?php

namespace App\InterfacesTask1;
use App\ClassesTask1\Garage;

/**
 * Interface CarInterface
 */
interface CarInterface
{
    /**
     * Start the car
     *
     * @return boolean
     */
    public function start();

    /**
     * Stops the car
     *
     * @return boolean
     */
    public function stop();

    /**
     * Parks the car in a garage
     *
     * @param GarageInterface $garage
     *
     * @throws \LogicException if the car is not started
     * @throws \LogicException if the garage is full
     *
     * @return boolean
     */
    public function park(Garage $garage);
}
