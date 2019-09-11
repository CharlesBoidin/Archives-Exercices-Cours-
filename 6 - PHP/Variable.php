<style>
table
{
    border-collapse: collapse;
}

td, th 
{
    border: 1px solid black;
}
</style>

<?php
// // Text
// $nom = 'groot';$prenom = 'groot'; $age = 33;
// echo "Je m'appelle ".$prenom." ".$nom." et j'ai ".$age." ans";

// // Calcul
// $a=10; $b=20; $c=15; $d=0;

// $d = $a+$b+$c;
// echo '<p>La somme : '.$d.'</p>';
// $d = $a+$b-$c;
// echo '<p>La différence : '.$d.'</p>';
// $d = $a/$b;
// echo '<p>La division : '.$d.'</p>';

// // Constante
// define("CURRENT_YEAR", date('Y'));
// echo CURRENT_YEAR;

// Je définie les contante pour le taux de TVA
// Define('TVA20',20);
// Define('TVA10',10);
// Define('TVA5',5.5);

// Tableau et boucle for
// $tableau= array ('Pierre', 'Anick','Marie');
// // var_dump ($tableau);
// for ($i=0;$i< count($tableau); $i++){
//     echo '<p>'.$tableau[$i].'<p>';
// }

// Liste déroulante
// $couleurs  = ['red','crimson','yellow','green','cyan','blue','purple'];
//  echo "<select>";
// foreach ($couleurs as $couleur)
// {echo "<option>".$couleur."</option>";};
// echo "</select>";

// Tableau contenant d'autres tableaux
// $Audi= array ('A1', 'A2','A3', 'A4', 'A5');
// $BMW= array ('B1', 'B2','B3', 'B4', 'B5');
// $Citroen= array ('C1', 'C2','C3', 'C4', 'C5');
// $TableauVehicule = array ("Audi" => $Audi, "BMW" => $BMW,  "Citroen" =>$Citroen);

// $user = ["nom"=> ["Dupont"], "prenom"=>["Jean",["surnom"=>"Toto"]]];

// // // Tableau horizontal
// echo "<table>";
// foreach($TableauVehicule as $Key =>$Type )
// {
//     echo "<tr><th>".$Key."</th>";
//     foreach ($Type as $Modele )
//     {
//         echo "<td>".$Modele."</td>";
//     }
//     echo "</tr>";
// }

// $departements = ["Nord" => ['Dunkerque','Lille', 'Lomme' ], "Pas-de-Calais"=>['Arras','Bethune','Calais'], "Rhone"=>['Valence','Lyon','Montélimar'], "Bretagne"=>['Vannes','Saint-Malo','Brest']  ];

// Table Semi-verticale
// echo "<table>";
// foreach($departements as $Key =>$Type )
// {
  
//     foreach ($Type as $Modele )
//     {
//         echo "<tr><th>".$Key."</th>";
//         echo "<td>".$Modele."</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

//table verticale
// echo '</table></div>'; 
//     echo "<div class='container'><table class='table table-striped table-bordered text-center'>";
//     $thead="<thead class='thead-dark'><tr>";
//     $key=array_keys($departements);
//     $thead.='<th>'.implode('</th><th>',$key).'</th></tr></thead><tbody>';
//     for($j=0;$j<count($departements[$key[0]]);$j++)
//     {
//         $thead.='<tr>';
//         for($i=0;$i<count($departements);$i++)
//         {
//             $thead.="<td>".$departements[$key[$i]][$j]."</td>";
//         }
//         $thead.='</tr>';
//     }
//     echo $thead.'</tbody></table></div>';

// Condition IF
// $MarqueVehicule = ["Audi", "BMW",  "Citroen", "VW"];
// foreach ($MarqueVehicule as $Marque) {
//     if ($Marque == 'Audi'|| $Marque == 'BMW'){
//         echo $Marque.': Vl <br>';
//     }
//     elseif($Marque == "VW") {
//         echo $Marque.'<br>';
//     }
//     else {
//         echo $Marque.': Je ne suis pas VL<br>';
//     }
// }

// // Switch Case
// $Marque = "BMW";
// switch ($Marque ) {
//     case 'Audi' || 'BMW':
//         echo $Marque.': Vl <br>';
//         break;
//     case 'VW':
//         echo $Marque.'<br>';
//         break;
//     default:
//         echo $Marque.': Je ne suis pas VL<br>';
//         break;
// }

// Boucle avec While
//  $ville = ["Lille","Roubaix","Villeneuve","Aras"]; $i = 0;
//  while ($i < count($ville)) 
//  {
//     echo $ville[$i]."<br>";
//     $i++;
//  }

// // Indique le chemin jusqu'au fichier
// echo __FILE__;

// // Indique le chemin jusqu'au dossier où est situé le fichier
// echo __DIR__;   

// Données du server
var_dump ($_SERVER);

// var_dump($user );




?>