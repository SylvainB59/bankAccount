<?php

// Get all accounts in db
$accounts = $AccountManager->getAccounts();

// Get user function of session userId
$user = $UserManager->getUser($_SESSION['userId']);



include('views/indexView.php');

?>
