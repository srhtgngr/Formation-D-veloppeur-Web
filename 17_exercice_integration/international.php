<!DOCTYPE html>
<html lang="fr">

<head>
    <title>l'Edito</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="media/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container-fluid justify-content-between" id="head">
            <div class="bloc-left">
                <div style="font-family: Arial;background-color: #fbfbfb;border: 1px solid #e7e7e7;width: 295px;height: 245px;-moz-box-shadow: 0 0 2px 1px #e7e7e7;-webkit-box-shadow: 0 0 2px 1px #e7e7e7;box-shadow: 0 0 2px 1px #e7e7e7;overflow: hidden; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                    <div style="width: 295px;height: 245px;">
                        <div style="margin:7px 10px;">
                            <div style="color: #222222;font-family: Arial;font-size: 12px;font-weight: bold;margin: 0px 0px 7px 0px;line-height: 14px;">Météo barbecue<br /><span style="font-weight:normal;">Metz</span></div><iframe id="widget-frame" src="http://www.meteovista.fr/Go/ExternalWidgetsNew/TwoDaysCity?gid=4277609&activityType=2&sizeType=1&temperatureScale=Celsius&defaultSettings=False" width="235" height="145" frameborder="0" scrolling="no" style="border: none;" allowtransparency="true"></iframe><a href="http://www.meteovista.fr/Europe/France/Metz/4277609" style="background: url(http://www.meteovista.fr/Shared/Images/list_icon_blue_trans.png) no-repeat scroll left 1px transparent;color: #0160b2;font-family: Arial;font-size: 12px;font-weight: normal;padding-left: 14px;margin: 7px 0px 5px 0px;line-height: 12px;outline: none;text-decoration: none;display: inline-block;" target="_blank">Météo barbecue à Metz</a><a href="http://www.meteovista.fr/" style="display: block;height: 25px;width: 113px;margin: 0px 10px 8px 0px;outline: none;text-decoration: none;" title="Meteovista.fr la météo autrement" target="_blank"><img src="http://www.meteovista.fr/Shared/Images/variations/fr-FR/new-widget-logo-FR-color.png" width="113" height="25" alt="Meteovista.fr la météo autrement" style="border: none;background-color: transparent;box-shadow: none;" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloc-center">
                <span id="titre">
                    <p>
                        <h1>L'EDITO</h1>
                    </p>
                </span>
                <span id="titre2">
                    <p>
                        <h2>L'info, La Vraie</h2>
                    </p>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                </span>
            </div>
            <div class="bloc-right">
                <div class="accueil">
                    <p>La Rédac : accueil@ledito.fr</p>
                    <p>Fax : 0123456789</p>
                    <p>tel : 0198765432</p>
                </div>
                <p>Service-abonné : xxxxxxxxxx</p>
                <button class="abonnement" type="buton" data-toggle="modal" data-target="#exampleModalCenter">
                    <h4>S'abonner</h4>
                </button>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Formulaire d'abonnement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-first">
                            <form action="" method="post">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="example@mail.com">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Pass</div>
                                    </div>
                                    <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Pass</div>
                                    </div>
                                    <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Confirm Password">
                                </div>
                            </form>
                        </div>
                        <div class="modal-center">
                            <div class="modal-center-left">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">PAYPAL</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">CB VISA</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">MASTERCARD</label>
                                </div>
                            </div>
                            <div class="modal-center-right">
                                <div>
                                    <select class="custom-select">
                                        <option selected>choix abonnement</option>
                                        <option value="1">Gratuit</option>
                                        <option value="2">Premium</option>
                                        <option value="3">Premium +</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                        </div>
                        <div class="w-100 p-3">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Soumettre</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="date">
            <?php
            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
            echo (strftime("%A %d %B %Y"));
            ?>
        </div>
        <div class="container-fluid">
            <nav class="container-fluid navbar navbar-expand-lg">
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse border-top border-secondary" id="navbarTogglerDemo01">
                    <ul class="navbar-nav nav-justified container-fluid">
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="international.php">International</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="#">France</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="#">Grand-Est</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="#">Economie</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="#">Culture</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark " href="#">Le Dossier de l'Edito</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid justify-content-between">
            <div class="meteo-mobile" id="meteo-mobile">
                <div style="font-family: Arial;background-color: #fbfbfb;border: 1px solid #e7e7e7;width: 160px;height: 220px;-moz-box-shadow: 0 0 2px 1px #e7e7e7;-webkit-box-shadow: 0 0 2px 1px #e7e7e7;box-shadow: 0 0 2px 1px #e7e7e7;overflow: hidden; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                    <div style="width: 160px;height: 220px;">
                        <div style="margin:7px 10px;">
                            <div style="color: #222222;font-family: Arial;font-size: 12px;font-weight: bold;margin: 0px 0px 7px 0px;line-height: 14px;">Météo barbecue<br /><span style="font-weight:normal;">Metz</span></div><iframe id="widget-frame" src="http://www.meteovista.fr/Go/ExternalWidgetsNew/TwoDaysCity?gid=4277609&activityType=2&sizeType=2&temperatureScale=Celsius&defaultSettings=False" width="140" height="95" frameborder="0" scrolling="no" style="border: none;" allowtransparency="true"></iframe><a href="http://www.meteovista.fr/Europe/France/Metz/4277609" style="background: url(http://www.meteovista.fr/Shared/Images/list_icon_blue_trans.png) no-repeat scroll left 1px transparent;color: #0160b2;font-family: Arial;font-size: 12px;font-weight: normal;padding-left: 14px;margin: 7px 0px 5px 0px;line-height: 12px;outline: none;text-decoration: none;display: inline-block;" target="_blank">Météo barbecue à Metz</a><a href="http://www.meteovista.fr/" style="display: block;height: 25px;width: 113px;margin: 0px 10px 8px 0px;outline: none;text-decoration: none;" title="Meteovista.fr la météo autrement" target="_blank"><img src="http://www.meteovista.fr/Shared/Images/variations/fr-FR/new-widget-logo-FR-color.png" width="113" height="25" alt="Meteovista.fr la météo autrement" style="border: none;background-color: transparent;box-shadow: none;" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloc-right-mini" id="right-mobile">
                <div class="accueil">
                    <p>La Rédac : accueil@ledito.fr</p>
                    <p>Fax : 0123456789</p>
                    <p>tel : 0198765432</p>
                </div>
                <p>Service-abonné : xxxxxxxxxx</p>
                <button class="abonnement" type="buton" data-toggle="modal" data-target="#exampleModalCenter">
                    <h4>S'abonner</h4>
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col" id="inter">
                    <span class="titre">International</span>
                    <div class="img">
                    <img class=img-responsive id="international" src="media/450.jpg" alt="">
                    </div>
                    <div class="texte">
                        <p>
                            <h1>Lorem ipsum dolor</h1> sit amet consectetur, adipisicing elit. Dolorum cupiditate enim facere facilis qui veritatis error illo dicta, necessitatibus voluptates amet provident deserunt illum recusandae incidunt iste impedit assumenda beatae?
                            Recusandae voluptatibus maiores suscipit dolorem voluptatum laboriosam et perspiciatis numquam quod officia mollitia dolorum atque velit in, corporis dolor vitae totam exercitationem sint placeat tenetur! Nam, iste dolorum? At, officiis?
                            Facilis reprehenderit ut et ratione rem in fuga, recusandae molestias deserunt, est ex vitae vero amet, sed impedit excepturi consectetur aspernatur doloremque magnam! Maxime earum alias quis mollitia optio dolorem?
                            Dignissimos, blanditiis debitis doloremque vel officiis enim iste harum, quibusdam maiores fugit illum laboriosam veritatis praesentium hic quasi ea totam molestiae error voluptas unde? Quaerat possimus error omnis non itaque!
                            Tenetur repellat alias similique quisquam sapiente soluta, incidunt, sit, facilis ipsam sint cupiditate laborum inventore rerum. Dolores, in ducimus vitae iure facilis amet a, incidunt repellat dignissimos corporis inventore explicabo.
                        </p>
                    </div>
                    <div class="texte2">
                        <p>
                            <h1>Lorem ipsum dolor</h1> sit amet consectetur adipisicing elit. Eos temporibus quia distinctio atque facere minus accusantium sed alias placeat amet ullam nisi, culpa dolores commodi! Dolor quidem aut sapiente temporibus!
                            Ea nam repudiandae aut. Quaerat harum ipsum molestiae minus nesciunt dolorum molestias voluptatibus iure eius consequatur a dolorem illum mollitia adipisci eaque, quae magnam repellat tempore quibusdam beatae optio error!
                            Voluptas aperiam quaerat praesentium quis optio, vel consectetur corporis saepe tempora omnis placeat similique accusantium sint, blanditiis architecto, nisi labore perferendis. Dicta est qui dignissimos explicabo ad dolorem, veniam doloremque?
                            Illo quae alias temporibus assumenda magnam doloribus exercitationem odit, provident voluptatem itaque perspiciatis ratione molestias esse nulla eum aliquid magni, in beatae officiis incidunt illum accusamus. Architecto reiciendis nostrum nobis.
                            Quae corrupti quidem vel doloremque autem aperiam mollitia consectetur quasi. Quia aliquam vel facere dignissimos animi magni cum fuga doloremque nihil provident, excepturi nostrum suscipit ut, molestiae itaque beatae! Labore!

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>