<?php
include_once("../classes/Plats.php");
$db =new PDO("mysql:host=127.0.0.1;dbname=lebonbarquette","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );


if(isset($_POST["nom"])){

    $client=new Client();
    
    $client->setId(NULL);
    
    $client->setNom($_POST["nom"]);
    
    $client->setPrenom($_POST["description"]);
    
    $client->setVille($_POST["photo"]);
    
    $client->setTelephone($_POST["prix"]);
    
    
    
    
    
    $requete=$db->prepare("INSERT INTO plats (id,nom,description,photo,prix) values (:id,:nom,:description,:photo,:prix)");
    
    $requete->execute(dismount($client));
    var_dump($db->lastInsertId());
    }
    
    //var_dump($utilisateur2);
    
    
    
    function dismount($object) {
    
        $reflectionClass = new ReflectionClass(get_class($object));
    
        $array = array();
    
        foreach ($reflectionClass->getProperties() as $property) {
    
            $property->setAccessible(true);
    
            $array[$property->getName()] = $property->getValue($object);
    
            $property->setAccessible(false);
        }
        return $array;
    }

        
    include_once("../Admin/header.php");
?>
<div class="container-fluid" id="sidebar">
    <div class="row">
        <div class="col-md-6">
            <img src="../img/logo.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" id="sidebar-logo">
        </div>
        <div class="col-md-6">
            <p id="txtadmin">Administration</p>
        </div>
    </div>
    <nav>
      <ul>
        <li id="lien_liste"><a href="#">Liste des repas</a></li>
        <li id="lien_ajout"><a href="#">Ajouter repas</a></li>
      </ul>
</div>


</div>
<div class="container">
        <form class="form" action="ajout_client.php" method="post">
            <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="">
            <label for="">Description</label>
            <input type="text" name="Description" id="Description" class="form-control" placeholder="">
            <label for="">Photo</label>
            <input type="text" name="photo" id="photo" class="form-control" placeholder="">
            <label for="">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary" action="">Submit</button>
            </div>
        </form>
    </div>
<?php include_once("../Admin/footer.php");?>