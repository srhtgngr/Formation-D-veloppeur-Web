
    <?php
    require 'vehicle.php';

    $vehicle1 = new vehicle(TRUE, 100, FALSE);
    $vehicle1->EngineStart();

    print_r($vehicle1)
    ?>
