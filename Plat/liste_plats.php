<?php
$ROOTCSS = '../';
$ROOT = '../';
include_once("../Admin/header.php");
?>
<div class="liste-plats">
    <h1>Liste des plats</h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Miniature</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../img/rougail_saucisse.jpg" width="50" alt=""></td>
                    <td>Rougail saucisse</td>
                    <td>6,25 €</td>
                    <td>
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-warning text-light">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include_once("../Admin/footer.php"); ?>