<?php

namespace serhat;

require "vendor/autoload.php";

$title = 'accueil'; ?>

<?php ob_start(); ?>

<form action="models/CriminelsManager.php" method="post">
    <div class="form-group">
        <label for="nom_r">nom Criminel</label>
        <input type="text" class="form-control" name="nom_r" id="nom_r">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('views/templates/base.php'); ?>