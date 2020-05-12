<?php

namespace serhat;

require ("vendor/autoload.php");

$title = 'accueil'; ?>

<?php ob_start(); ?>

<form action="controllers/AgentVerify.php" method="post">
    <div class="form-group">
        <label for="pseudo_a">Pseudo Agent</label>
        <input type="text" class="form-control" name="pseudo_a" id="pseudo_a">
    </div>
    <div class="form-group">
        <label for="mot_de_passe_a">Password</label>
        <input type="password" class="form-control" name="mot_de_passe_a" id="mot_de_passe_a">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean();

require('views/templates/base.php'); ?>