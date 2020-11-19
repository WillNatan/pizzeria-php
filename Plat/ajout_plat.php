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

        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter client</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>