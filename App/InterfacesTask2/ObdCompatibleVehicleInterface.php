<?php
namespace App\InterfacesTask2;
use App\InterfacesTask2\ObdDiagnosticToolInterface;
use App\ClassesTask2\ModernCar;


/**
 * Interface ObdCompatibleVehicle
 *
 * On-board diagnostics (OBD) is an automotive term referring to a vehicle's self-diagnostic and reporting capability.
 *
 * @see    http://en.wikipedia.org/wiki/On-board_diagnostics
 */
interface ObdCompatibleVehicleInterface
{
    /**
     * Diagnose the vehicle with the compatible tool
     *
     * @param ObdDiagnosticToolInterface $tool
     *
     * @return int[] Array of diagnostic trouble codes (DTCs)
     */
    public function diagnose(ObdDiagnosticToolInterface $tool);
}
