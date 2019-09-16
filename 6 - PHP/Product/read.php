<?php

$idProduct =$_GET['id'];    
    
// Connection Serveur
require 'Connect.php';
$db = connect('products');

try {
    // Configuration de la requète Select
    $req = $db-> prepare ('SELECT 
        products.name as NameProduct, 
        products.description as DescriptionProduct,
        products.price as PriceProduct, 
        categories.name as Category
    FROM products
    INNER JOIN categories ON products.category_id = categories.id
    WHERE products.id = :IdProduct ' );

    // Parametrage de la variable
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