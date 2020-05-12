<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau de bord</title>
</head>

<body>

    <?php
    require 'vehicle.php';

    $vehicle1 = new vehicle;
    $vehicle1->EngineStart();
    ?>

    <table border="1">
        <tr>
            <td>nom du véhicule</td>
            <td>état des pneus</td>
            <td>carburant</td>
            <td>état moteur</td>
        </tr>
        <tr>
            <td><?php echo "vehicle1" ?></td>
            <td><?php echo $vehicle1->WheelCondition() ?></td>
            <td><?php echo $vehicle1->FuelLevel() ?></td>
            <td><?php $vehicle1->EngineStart($vehicle1)?></td>
        </tr>
    </table>

</body>

</html>
