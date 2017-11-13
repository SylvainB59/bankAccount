<?php
// Start a session
session_start();

// Just one user for now, so i fix the sesion[userId] to 1
$_SESSION['userId'] = 1;

// Autoload for class call
function loadClass($class)
{
	if($class == 'AccountManager' OR $class == 'UserManager')
	{
		require('models/' . $class . '.php');
	}
	else
	{
		require('models/entities/' . $class . '.php');
	}
}

spl_autoload_register('loadClass');


$AccountManager = new AccountManager();
$UserManager = new UserManager();
// var_dump($_POST);
// $testAccount = $AccountManager->getAccount($_POST['accountId']);
// var_dump($testAccount);
// echo '****'.$_POST['amount'].'****';
// $testAccount->withdraw($_POST['amount']);
// var_dump($testAccount);
// $AccountManager->updateAccount($testAccount);
// echo $amount;
// $_POST['amount'] = 'blabla';
// $_POST['amount'] = (int)$_POST['amount'];
// $_POST['test'] = is_int($_POST['amount']);
// var_dump($_POST);

if(isset($_POST['newAccount']) OR isset($_POST['deposit']) OR isset($_POST['withdraw']) OR isset($_POST['transfer']) OR isset($_POST['validNewAccount']))
{
	include('controlleurs/banking.php');
}
else
{
	include('controlleurs/index.php');
}


?>
