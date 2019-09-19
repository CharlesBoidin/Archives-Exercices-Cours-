<?php
session_start ();

    require 'Connect.php';
    
    $db = connect("passwords");

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = null;
	}
	if(isset($_POST['password'])){
		$password = sha1(trim($_POST['password']));
	}else{
		$password = null;
    }   

    // Préparation de la requete 
    $req = $db->prepare("SELECT * FROM users, typeusers WHERE users.Id_typeUser = typeusers.Id_typeUser AND email = :email AND password = :password");
    
    // Parametrage des variable
	$req->bindParam(":email", $email, PDO::PARAM_STR);
    $req->bindParam(":password", $password);
    
    $data = $req->execute() ;
    while($data = $req->fetchObject()){
        $_SESSION['TypeUser']  = $data->typeName ;
        $_SESSION['Mail']  = $data->email ;
        if(!$data){
            $_SESSION['login'] = $data->typeName ;
            header('Location: signit.php');
        }
        else{
        header('Location: connected.php');
        }
    }
?>