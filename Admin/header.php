<head>
    <title>Accueil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $ROOTCSS ?>css/admin/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div id="sidebar">
        <button class="close-sidebar"><i class="fa fa-times"></i></button>
        <div class="row no-gutters">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="../img/logo.png" class="img-fluid" alt="" id="sidebar-logo">
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <p id="txtadmin">Administration</p>
            </div>
        </div>
        <nav>
            <ul class="nav">
                <li id="lien_liste"><a href="<?php echo $ROOT?>Plat/liste_plats.php"><i class="fa fa-columns"></i> Liste des repas</a></li>
                <li id="lien_ajout"><a href="#"><i class="fa fa-plus"></i> Ajouter repas</a></li>
            </ul>
    </div>
    <div class="main-content container">
        <button class="btn-open-sidebar"><i class="fa fa-bars"></i></button>
