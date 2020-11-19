<?php
include_once("../classes/Plats.php");
$db =new PDO("mysql:host=127.0.0.1;dbname=lebonbarquette","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

if(isset($_POST["nom"])){
    $plat=new Plats();
    $plat->setId(NULL);
    $plat->setNom($_POST["nom"]);
    $plat->setDetail($_POST["detail"]);
    $plat->setPhoto($_POST["photo"]);
    $plat->setPrix($_POST["prix"]);
    
    $requete=$db->prepare("INSERT INTO plats (id,nom,detail,photo,prix) values (:id,:nom,:detail,:photo,:prix)");
    $requete->execute(dismount($plat));
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

/*
if(isset($_POST['nom'])){
    $plat=new Plats();
    $plat->setId(NULL);
    $nom=$_POST['nom'];
    $detail=$_POST['detail'];
    $photo=$_POST['photo'];
    $prix=$_POST['prix'];

    $ajout = $db->prepare("INSERT INTO `client` (`id`, `nom`, `detail`, `photo`, `prix`) VALUES ('', '$nom', '$detail', '$photo', '$prix')");
    $ajout->execute();
    $id=$db->lastInsertId();






    $db =new PDO("mysql:host=127.0.0.1;dbname=lebonbarquette","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
if(isset($_POST["nom"] )){

    $plat=new Plats();
    
    $plat->setId(NULL);
    
    $plat->setNom($_POST["nom"]);
    
    $plat->setDescription($_POST["detail"]);
    
    $plat->setPhoto($_POST["photo"]);
    
    $plat->setPrix($_POST["prix"]);
    
    
    
    
    
    $requete=$db->prepare("INSERT INTO plats (id,nom,detail,photo,prix) values (:id,:nom,:detail,:photo,:prix)");
    
    $requete->execute(dismount($plat));
    $id=$db->lastInsertId();

    }
    
    
    
    
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
    */

    $ROOTCSS = '../';
    $ROOT = '../';
    include_once("../Admin/header.php");
?>
<div class="container">
        <form class="form" action="ajout_plat.php" method="post">
            <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="">
            <label for="">Description</label>
            <input type="text" name="detail" id="detail" class="form-control" placeholder="">
            <label for="">Photo</label>
            <input type="text" name="photo" id="photo" class="form-control" placeholder="">
            <label for="">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary" action="">Submit</button>
            </div>
        </form>
    </div>
<?php include_once("../Admin/footer.php");?>