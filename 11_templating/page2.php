<?php 
$title = 'page 2';
$style = 'style2';
?>

<?php ob_start() ?>

<h1>page2</h1>

<?php $content = ob_get_clean(); ?>

<?php require ('template.php') ?>
