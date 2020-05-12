<?php 
$title = 'page 1';
$style = 'style1';
?>

<?php ob_start() ?>

<h1>page1</h1>

<?php $content = ob_get_clean(); ?>

<?php require ('template.php') ?>
