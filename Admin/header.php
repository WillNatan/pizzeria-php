<head>
    <title>Accueil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $ROOTCSS_JS ?>css/admin/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <header>
        <div class="sidebar_btn">
            <span><i class="fa fa-bars"></i></span>
        </div>
        <div class="left_area">
            <h3>Le Bon Barquette</h3>
        </div>
        <div class="right_area">
            <a href="" class="logout_btn">Déconnexion</a>
        </div>
    </header>
    <div class="sidebar toggled">
        <h4>Admin</h4>
        <a href="<?php echo $ROOT?>"><i class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
        <a href="<?php echo $ROOT?>plat/"><i class="fa fa-columns"></i><span>Liste des repas</span></a>
        <a href="<?php echo $ROOT?>plat/ajout_plat.php"><i class="fa fa-plus"></i><span>Ajouter un repas</span></a>
    </div>
    <div class="container content">