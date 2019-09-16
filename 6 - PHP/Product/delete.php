<?php
$idProduct =$_GET['id'];

// Connection Serveur
require 'Connect.php';
$db = connect('products');

try {
    // Configuration de la requète Delete
    $req = $db-> prepare ('DELETE FROM products
    WHERE products.id = :IdProduct ' );

    // Paramtrage de la variable
    $req->bindParam(":IdProduct",$idProduct,PDO::PARAM_INT);

    // Execution de  la réquete
    $req->execute();
    while($data = $req->fetchObject()){
        echo 'Nom du produit : '.$data->NameProduct.'<br> Description : '.$data->DescriptionProduct.'<br> Prix :  '.$data->PriceProduct.' € <br> Catégorie :   '.$data->Category.'  </p>';}
    } 
catch(Exception $e) {
    echo $e->getMessage();
}     


?>