
<?php

require 'Connection2.php';
$db = connect();

try {

    $CategoryArticle = 2;
    $req = $db-> prepare ('SELECT 
        products.name as NameProduct, 
        products.description as DescriptionProduct,
        products.price as PriceProduct, 
        categories.name as Category
    FROM products
    INNER JOIN categories ON products.category_id = categories.id
    WHERE products.id
   ' );

    $req->execute();


    
    while($data = $req->fetchObject()){
        echo 'Nom du produit : '.$data->NameProduct.'<br> Description : '.$data->DescriptionProduct.'<br> Prix :  '.$data->PriceProduct.' € <br> Catégorie :   '.$data->Category.'  </p>';}
    } 
catch(Exception $e) {
    echo $e->getMessage();
}

?>