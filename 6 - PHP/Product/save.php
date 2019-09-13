<?php

// Recuperation des données
$idProduct =$_GET["id"];
$NameProduct = htmlspecialchars ($_POST["NameProduct"],ENT_QUOTES);  
$DescriptionProduct = htmlspecialchars ($_POST["DescriptionProduct"],ENT_QUOTES);
$PriceProduct = htmlspecialchars ($_POST["PriceProduct"],ENT_QUOTES); 
$Category = htmlspecialchars ($_POST["Category"],ENT_QUOTES);    

    
// Connection Serveur
require 'Connection2.php';
$db = connect();


try {
    // Préparation de la requete
    $req = $db-> prepare ('UPDATE products 
    SET name = :NameProduct,
        description = :DescriptionProduct,
        price = :PriceProduct, 
        category_id = :Category
    WHERE id = :IdProduct ' );

    // changemnts des paramètre et controle des champs
    $req->bindParam(":IdProduct",$idProduct,PDO::PARAM_INT);
    $req->bindParam(":Category",$Category,PDO::PARAM_INT);
    $req->bindParam(":PriceProduct",$PriceProduct,PDO::PARAM_INT);
    $req->bindParam(":DescriptionProduct",$DescriptionProduct,PDO::PARAM_STR);
    $req->bindParam(":NameProduct",$NameProduct,PDO::PARAM_STR);

    // // execution de la requette
    $req->execute();
    
} 
catch(Exception $e) {
    echo $e->getMessage();
}



?>