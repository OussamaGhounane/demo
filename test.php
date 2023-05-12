<?php
require_once 'vendor/autoload.php';
require_once 'includes/function.php';

use Src\Ecole\Etudiant as EcoleEtudiant;
use Src\Formation\Etudiant;


$e_formation = new Etudiant();
$e1 = new EcoleEtudiant('toto','tata');


var_dump($e1);
var_dump($e_formation);
