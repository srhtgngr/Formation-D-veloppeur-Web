
    <?php
    require 'vehicle.php';

    $vehicle1 = new vehicle(TRUE, 100, FALSE, Vehicle::LOW_ENGINE_POWER);
    $vehicle1->EngineStart();

    print_r($vehicle1)
    ?>
