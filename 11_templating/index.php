<?php 
$title = 'accueil';
?>

<?php ob_start(); ?>

    <a href="page1.php">page1</a>
    <a href="page2.php">page2</a>

<?php $content = ob_get_clean(); ?>

<?php require ('template.php'); ?>
