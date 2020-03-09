<?php

namespace App\InterfacesTask2;
use App\InterfacesTask2\ObdCompatibleVehicleInterface;
use App\InterfacesTask2\ObdDiagnosticToolInterface;
use App\ClassesTask2\ModernCar;

/**
 * Interface ObdDiagnosticToolInterface
 *
 * On-board diagnostics (OBD) is an automotive term referring to a vehicle's self-diagnostic and reporting capability.
 *
 * @see    http://en.wikipedia.org/wiki/On-board_diagnostics
 */
interface ObdDiagnosticToolInterface
{
    /**
     * Use the tool on a vehicle
     *
     * @param ObdCompatibleVehicleInterface $vehicle
     *
     * @return int[] Array of diagnostic trouble codes (DTCs)
     */
    public function diagnose(ModernCar $vehicle);

}
