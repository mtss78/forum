<?php

try{
    //ici on se connecte a la base de donées
    $mysqlClient = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root');
}catch(Exception $e){
    //ici je récupére et affiche l'erreur
    die('ERREUR : ' . $e->getMessage());
}