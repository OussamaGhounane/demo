<?php
// $name = "Chawcha3";
// echo "Bonjour $name";
// $age = 20;
// printf("bonjour %d". $age);

$names = ['a','b','c','d'];

// var_dump($names);

// for($i = 0;$i < sizeof($names); $i++){
//     echo "$names[$i] <br/>";
// }

// foreach($names as $nm){
//     echo "$nm <br/>";
// }


// echo array_push($names,'k');


                                                        //exercice
// $condiment = ["Tomate","Oignon","persif","carote",'Choux',"poivronf"];
// var_dump($condimaent);

// supprimer le dernier element
// array_pop($condiment);

// //ajouter a la fin d'un tableau
// array_push($condimaent,'bettrave');

// // supprimer le premier element
// array_shift($condiment);

// // ajouter au debut
// array_unshift($condiment,'Pomme de Terre');
// var_dump($condimaent);

                                                        //exercice
// $datas = array(3,8,0,-2,0,4,0,-6,7);

// $negativ= array_filter($datas,function($ng){
//    return $ng >0;
// });

// $positiv= array_filter($datas,function($ng){
//     return $ng <0;
//  });

// var_dump($negativ);
// var_dump("$positiv </br>");

// $pere= array_filter($datas,function($ng){
//     return $ng % 2 == 0;
//  });

//  var_dump($pere);


// $sanszero = array_filter($datas,function($ng){
//     return $ng != 0;
//  });

//  $aveczero = array_filter($datas,function($ng){
//     return $ng == 0;
//  });
// //  var_dump($sanszero);
//   $result =   array_merge($sanszero,$aveczero);

//   print_r($result);
 
// print_r($datas);7


// echo "<pre>";
// var_dump($_SERVER);
// "</pre>";
// include 'includes/function.php';

// include_once 'views/partials/header.php';

// $url = $_SERVER["REQUEST_URI"];
// switch ($url) {
//    case  "/":
//       require_once 'views/home.php';
//      break;
//    case  "/contact";
//       require_once 'views/contact.php';
//      break;
//    default:
//    echo "404 Not Found";
//    break;
//  }
 
//  include_once 'views/partials/footer.php';

require 'class/AutoLoad.php';