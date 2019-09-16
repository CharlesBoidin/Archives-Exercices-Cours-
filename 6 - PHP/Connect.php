<?php

function connect($database)
{

    try
    {
        $db = new PDO ('mysql:host=localhost;dbname='.$database.';charset=utf8','root','');
        echo "ok";
        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
}

?>

