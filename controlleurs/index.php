<?php

// Get user function of session userId
$user = $UserManager->getUser($_SESSION['userId']);

// Get all accounts in db
$accounts = $AccountManager->getAccounts();

// Count how many account the user have
$nbUserAccount = $AccountManager->countAccount($user->getId());

include('views/indexView.php');

?>
