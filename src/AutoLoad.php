<?php

spl_autoload_register(function ($class){
    $fileName = "class/$class.php";
    if(file_exists($fileName)){
      require $fileName;
    }
    else{
      echo "file No exist";
    }
  });
  
  $voiture = new Voiture("red");
  echo $voiture->getColor();
  $entreprise = new Entreprise("Coca-Cola");
  echo $entreprise->getName();

  ?>