<?php 


$_SESSION['mon_nom'] = $_POST['nom'];

header('Location:/contact');

// session_destory(); pour vider la session

?>