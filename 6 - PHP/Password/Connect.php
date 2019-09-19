<?php

function connect($database)
{

    try
    {
        $db = new PDO ('mysql:host=localhost;dbname='.$database.';charset=utf8','root','');
        echo "Connection OK <br>";
        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
}

?>

