<?php
try
{
    $db = new PDO ('mysql:host=localhost;dbname=francevelo;charsert=utf8','root','');
    echo "ok";
    return $db;
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

?>

