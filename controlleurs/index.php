<?php

// Get user function of session userId
$user = $UserManager->getUser($_SESSION['userId']);

// Get all accounts in db
$accounts = $AccountManager->getAccounts();

$nbUserAccount = $AccountManager->countAccount($user->getId());

include('views/indexView.php');

?>
