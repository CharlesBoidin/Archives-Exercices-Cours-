<?php
$idProduct =$_GET['id'];

// Connection Serveur
require 'Connect.php';
$db = connect('products');

try {
    // Configuration de la requète Delete
    $req = $db-> prepare ('DELETE FROM "products"
    WHERE id =  '.$idProduct );

    // Parametrage de la variable
    $req->bindParam(":IdProduct",$idProduct,PDO::PARAM_INT);

    // Execution de  la réquete
    $req->execute();
   
    } 
catch(Exception $e) {
    echo $e->getMessage();
}     


?>