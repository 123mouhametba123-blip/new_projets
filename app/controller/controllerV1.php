<?php
 require_once dirname(__DIR__)."/core/sessionManagers.php";
 require_once dirname(__DIR__)."/models/model1.php";
 require_once dirname(__DIR__)."/core/database.php";
function affichage() {
  $periodes = getAllTable('periodes');
  $matieres = getAllTable('matieres');

    // var_dump($periodes);
    // die();  
  // $result3 = getAllTable('classe2');
  

 require_once dirname(__DIR__)."/views/vi1.php";
}

function login():void {
 
    require_once dirname(__DIR__)."/views/vi2.html.php";
}
function logout():void {
 
    require_once dirname(__DIR__)."/views/vi1.php";
}