<?php

function connect()
{
    try
    {
        $db = new PDO ('mysql:host=localhost;dbname=clients;charsert=utf8','root','');
        ;
        echo "okok";
        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
}
?>
