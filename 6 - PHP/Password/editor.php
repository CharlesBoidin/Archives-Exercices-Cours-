<?php
session_start ();
$TypeUSER = $_SESSION['TypeUser'] ;
$Email = $_SESSION['Mail'] ;

if ($TypeUSER == 'Admin' OR $TypeUSER == 'Editor'  )
{
    Echo'Bienvenue, '.$TypeUSER.' ! <br><br>';
}
else {
    Echo'Vous n\'avez pas les droits pour acceder à cette page ! <br><br>';
}

?>

<a href="connected.php"><button type="submit" class="btn col-2 btn-primary">Retour</button>
<a href="signit.php"><button type="submit" class="btn col-2 btn-danger">Se deconnecter</button>
