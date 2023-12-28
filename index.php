

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // //
    // echo"<h1>Hello word!</h1>";

    // $nomPersonneConcerner = "Richard";
    // echo $nomPersonneConcerner;
    // echo"<p> Bonjour $nomPersonneConcerner</p>";

    // //connaitre le type de variable
    // var_dump(  $nomPersonneConcerner);
      ?>
  
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des chaines de caractères</title>
</head>
<body>
    <?php 
    // $chaine = "ceci est une chaine de carcatere";
    // // echo $chaine;
    // //afficher un caractere particulier de la chaine
    // // echo $chaine[5];

    // // //modifier un carcatere de la chaine
    // // $chaine[5] = "f";
    // // echo $chaine;
    // //extraire ou acceder a une partie de la chaine
    // // var_dump(substr($chaine, -10));
    // // $chaine = str_replace('ceci', 'cela', $chaine);
    // // var_dump($chaine);

    // var_dump(str_contains($chaine, 'brouette'));
    // var_dump(str_starts_with($chaine, 'ceci'));
    // var_dump(strpos($chaine, "le"));

      ?>
<?php 
//Video3
// $nombre1 = 10;
// $nombre2 = 86;

// //addition
// $resultat = $nombre1 + $nombre2;
// //soustraction
// $resultat = $nombre1 - $nombre2;
// //multiplication
// $resultat = $nombre1 * $nombre2;
// //division
// $resultat = $nombre1+$nombre2/5;//priorité des calcule

// //modulo
// $resultat = $nombre2 % $nombre1;

//9 est il multiple de 3
// echo (9 % 3);


//incrementation
// // $nombre1 = $nombre1 + 1
// $nombre1 += 1;
// var_dump($nombre1++); //donne 10
// var_dump(++$nombre1); //donne 12


// // var_dump($resultat);

        ?>
<?php 
//video 4 des tableaux
// $tableau = ["bonjour", "moi", 14, 58, "lea","avion"];
// // var_dump($tableau[3]);
// // array_push($tableau, "fin");
// // var_dump($tableau);
// // $tableau [] = "Flight";//add only one element
// // var_dump($tableau);
// //array_unshift
// array_unshift($tableau, "début");//ajoute  au début
// // //supprimer des valeurs:
// // $valeur = array_shift($tableau);

// //diviser tableau en plusieurs élément
// $tableau2 = array_chunk($tableau, 2, true);

// var_dump($tableau2);
// // echo $valeur;
//melanger un tableau
// shuffle($tableau);
// var_dump($tableau);
//tableau multidimentionnelle
// $tableaumulti = [
//     0=>["nom" => "Nass",
//         "prenom" => "Yahiaoui",
//         "age" => "34",
//         "profession" => "Developpeuse web",
//     ],
//     1=>["nom" => "Toto",
//         "prenom" => "Anne",
//         "age" => "36",
//         "profession" => "Developpeur web et web mobile",
//     ],
//     2=>["nom" => "Ines",
//         "prenom" => "ber",
//         "age" => "31",
//         "profession" => "Developpeuse full stack",
//     ],

// ];
// var_dump($tableaumulti);
  ?>
<!-- <form action="index.php" method ="get">
<div>
    <label for="nombre1">Nombre 1:</label>
    <input type="number" id="nombre1" name ="nb1"> 
</div>
<div>
    <label for="nombre2">Nombre 1:</label>
    <input type="number" id="nombre2" name ="nb2"> 
</div>
<button type ="submit"> calcule</button>
</form> -->
  <?php 
  //video5
  //http://localhost:3000/index.php?nb1=3&nb2=-5
//   echo"<pre>";
//   var_dump($_GET["nb1"]);
//   echo"</pre>";
// $total = $_GET["nb1"] + $_GET["nb2"];
// echo $total;
// echo "<p>Total : $total</P>";
    ?>
<?php 
// //video6 les fonctions
// function additionner($nb1, $nb2)
// {
//     return $nb1 +  $nb2;
// }

// $total = additionner(18,8);
// var_dump($total);


// function saluer($prenom, $nom, $civilite = "", $salutation="Hola")

// {
//      echo "$salutation $prenom $nom";//injection de variable
// }



  ?>
<!-- <p><?php 
//  additionner(12,33);
  ?></p>
  <p><?php 
//  additionner(12,35);
  ?></p>
  <p><?php 
//  additionner(15,33);
  ?></p>
  <h1><?php 
//   saluer("Nass", "Yahiaoui")//hola s'affiche en premier
    ?></h1>

<h1><?php 
//   saluer(prenom:"Nass", nom : "Yahiaoui");
    ?></h1>  -->


<?php 
//Video 7 - on pose une question (conditions)
// $reponse = true;
// if($reponse){
// echo"bravo";
// }else{
//     echo"Puni";
// }

// $variable = 15;
// //pour comparer ==,
// if($variable !== "15"){
// echo"strictement différent";
// }else{
//     echo"égale";
// }

//opérateur combiner:
$variable = 17;
echo 




  ?>

</body>
</html>