<?php

require_once __DIR__ . "/../../src/init.php";

if (!isset($_POST['email'],$_POST['password'],$_POST['cpassword'] )){
    error_die('Erreur du fomulaire', '/?page=signup');
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL ) === false){
    error_die('Email invalide', '/?page=signup');
}

if (strlen($_POST['password'])< 4){
    error_die('mot de passe trop court', '/?page=signup');
}
if ($_POST['password'] !== $_POST['cpassword']){
    error_die('mot de passe trop court', '/?page=signup');
}
$alreadyUser = $userManager->getByEmail($_POST['email']);
if ($alreadyUser != false){
    error_die('Déjà inscrit', '/?page=signup');
}

$user = User::create($_POST['email'], $_POST['password'], $_SERVER['REMOTE_ADDR'], 1);
$user_id = $userManager->insert($user);

$_SESSION['user_id'] = $user_id;

header('Location: /?page=home');