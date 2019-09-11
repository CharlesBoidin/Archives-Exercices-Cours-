
<?php

require 'Connection2.php';
$db = connect();

try {
    // Préparation de la requete
    $CategoryArticle = 2;
    $req = $db-> prepare ('SELECT Appelation, Reference , Description , Prix 
    FROM articles
    WHERE category_category_id = :CategoryArticle ' );

    // changemnts des paramètre et controle des champs
    $req->bindParam(":CategoryArticle",$CategoryArticle,PDO::PARAM_INT);
    $req->execute();

    // Solution ForEach
    while($data = $req->fetchAll()){
		foreach ($data as $key => $value){
				echo '<p>La clef : '.$key.'  => la valeur :'.$value['Appelation'].'  '.$value["Reference"]." ".$value["Description"]." ".$value["Prix"].'</p>';
		}
    }
    
    // Solution PDO
    // while($data = $req->fetch(PDO::FETCH_ASSOC)){
	// 	//var_dump($data);
	// 	echo $data['Appelation'].' '.$data["Reference"]." ".$data["Description"]." ".$data["Prix"].'</br>';
	// }
    
    // Solution Objet
    // while($data = $req->fetchObject()){
    //     echo '<p>'.$data->Appelation.'  '.$data->Reference.'  '.$data->Description.'  '.$data->Prix.'  </p>';}
    
} 
catch(Exception $e) {
    echo $e->getMessage();
}

?>