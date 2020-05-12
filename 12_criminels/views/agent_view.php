<?php 

session_start();
$title = 'agents';
require ('templates/base.php');

$accreditation = $_SESSION['niveau_accreditation'];

switch($accreditation){
    case 1:
    case 2:
        ob_start(); ?>
        <html>


        </html>
        <?php $content = ob_get_clean();
        break;
    case 3:
        ob_start(); ?>
        <html>


        </html>
        <?php $content = ob_get_clean();
        break;
    default:
    ob_start(); ?>
    <html>


    </html>
    <?php $content = ob_get_clean();
    break;
} ?>

