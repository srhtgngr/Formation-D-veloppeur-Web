<!DOCTYPE html>
<html lang="fr">

<head>
    <title>A World Of Faces</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css personalisé en plus du bootstrap-->
    <link rel="stylesheet" content-type="text/css" href="styleindex.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" >
    <link rel="icon" type="image/gif" href="animated_favicon1.gif" >
    <link rel="apple-touch-icon" href="apple-touch-icon.png" >
</head>

<body>
    <header>
    <!--barre de navigation-->
    <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <img class="logo" src="images_small/logo_complet_small.png" alt="logo">
        <img class="logo2" src="images_small/logo_small.png" alt="logo2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biographie.php">Biographie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="commandes" style="visibility:hidden" href="commandes.php">Commandes</a>
                </li>
                <li>
                    <!-- Modal -->
                    <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog form-dark" role="document">
                            <!--Content-->
                            <div class="modal-content card card-image"
                                style="background-image : url(images_small/Moiphoto_resize.jpg);">
                                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                                    <!--Header-->
                                    <div class="modal-header text-center pb-4">
                                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel">
                                            <strong>Espace</strong> <a class="green-text font-weight-bold"><strong>
                                                    Membre</strong></a></h3>
                                        <button type="button" class="close white-text" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <!--Body-->
                                        <div class="md-form mb-5">
                                            <input type="email" id="Form-email5"
                                                class="form-control validate white-text" required>
                                            <label data-error="wrong" data-success="right" for="Form-email5">Votre
                                                email</label>
                                        </div>
                                        <div class="md-form pb-3">
                                            <input type="password" id="Form-pass5"
                                                class="form-control validate white-text" required>
                                            <label data-error="wrong" data-success="right" for="Form-pass5">Mot de
                                                Passe</label>
                                            <div class="form-group mt-4">
                                                <input class="form-check-input" type="checkbox" id="checkbox624" checked
                                                    required>
                                                <label for="checkbox624" class="white-text form-check-label">Vous acceptez
                                                    <a href="#" class="green-text font-weight-bold">
                                                        les conditions d'utilisations</a></label>
                                            </div>
                                        </div>
                                        <!--Grid row-->
                                        <div class="row d-flex align-items-center mb-4">
                                            <!--Grid column-->
                                            <div class="text-center mb-3 col-md-12">
                                                <button type="button"
                                                    class="btn btn-success btn-block btn-rounded z-depth-1"
                                                    onclick="window.location.href='indexmembre.php'">Inscription</button>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                        <!--Grid row-->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-md-12">
                                                <p class="font-small white-text d-flex justify-content-end"
                                                    id="account">Déjà Inscrit?
                                                    <a href="#" class="green-text ml-1 font-weight-bold">
                                                        Connexion</a></p>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                        <!--Grid row-->
                                    </div>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="text-center">
                        <a href="" class="btn btn-default btn-rounded" data-toggle="modal"
                            data-target="#darkModalForm">Connectez-vous !</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    </header>

    <main>
        <!--debut du cadre animation-->
        <div class="conteneur">
            <div class="anim_accueil"></div>
        </div>

    </main>
    
    <footer class="foot">

        <span>copyright Studio SX / DH photos</span>
    
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>