<?php

function connect()
{
    try
    {
        $db = new PDO ('mysql:host=localhost;dbname=products;charsert=utf8','root','');
        

        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
}
?>

