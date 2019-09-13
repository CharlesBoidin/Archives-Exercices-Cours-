<?php

$idProduct =$_GET['id'];    

Echo '<form action="save.php?id='.$idProduct .'" method="post" >';


// Connection Serveur
require 'Connection2.php';
$db = connect();


try {
    // Configuration de la requète Select
    $req = $db-> prepare ('SELECT 
        products.name as NameProduct, 
        products.description as DescriptionProduct,
        products.price as PriceProduct, 
        categories.name as Category,
        categories.id as IdCategory
    FROM products
    INNER JOIN categories ON products.category_id = categories.id
    WHERE products.id = :IdProduct ' );

    // Paramtrage de la variable
    $req->bindParam(":IdProduct",$idProduct,PDO::PARAM_INT);

    // Execution de  la réquete
    $req->execute();
    while($data = $req->fetchObject()){
        echo ' <label for="'.$data->NameProduct.'"> Nom du produit : </label><input type="text" name="NameProduct" value="'.$data->NameProduct.'"> <br>
        <label for="'.$data->DescriptionProduct.'"> Description du produit : </label><input type="text" name="DescriptionProduct" value="'.$data->DescriptionProduct.'"> <br>
        <label for="'.$data->PriceProduct.'"> Prix du produit (en €): </label><input type="text" name="PriceProduct" value="'.$data->PriceProduct.'"> <br>
        <label for="'.$data->Category.'"> Catégorie: </label><select name="Category">"';

        $req2 = $db-> prepare ('SELECT id, name FROM categories' );
        $req2->execute();
        while($data2 = $req2->fetchObject()){
            echo '<option value="'.$data2->id.'"'.( ($data->IdCategory==$data2->id) ? " selected" : " ").' >'.$data2->name.'</option>';
        }


        echo '</select> <br> <button class="btn btn-success" type="submit" id="'.$idProduct.'" name="Enregistrer" > Enregistrer</button></form>'          
        
        ;}
    } 
catch(Exception $e) {
    echo $e->getMessage();
}  

?>