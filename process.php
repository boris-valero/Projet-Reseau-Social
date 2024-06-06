<?php

$host = 'localhost';
$dbname = 'socialnetwork';
$username = 'root';
$password = 'root';

if(isset($_POST['insert'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $email = $_POST['email'];
  $password = $_POST['password'];
  $alias = $_POST['alias'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `users`(`email`, `password`, `alias`) VALUES (:email,:password,:alias)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":email"=>$email,":password"=>$password,":alias"=>$alias));
}
?>
