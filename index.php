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


if(isset($_POST['newAccount']) OR isset($_POST['deposit']) OR isset($_POST['withdraw']) OR isset($_POST['transfer']) OR isset($_POST['validNewAccount']))
{
	include('controlleurs/banking.php');
}
else
{
	include('controlleurs/index.php');
}


?>
