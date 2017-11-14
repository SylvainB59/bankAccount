<?php
// Start a session
session_start();

// Just one user for now, so I fix the sesion[userId] to 1
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
// $testAccount1 = $AccountManager->getAccount($_POST['accountIdToWithdraw']);
// $testAccount2 = $AccountManager->getAccount($_POST['accountIdToDeposit']);
// var_dump($testAccount1);
// var_dump($testAccount2);
// echo '****'.(int)$_POST['amount'].'****';
// $testAccount1->transfer($_POST['amount'], $testAccount2);
// var_dump($testAccount1);
// var_dump($testAccount2);
// $AccountManager->updateAccount($testAccount1);
// $AccountManager->updateAccount($testAccount2);
// echo $amount;
// $_POST['amount'] = 'blabla';
// $_POST['amount'] = (int)$_POST['amount'];
// $_POST['test'] = is_int($_POST['amount']);
// var_dump($_POST);

if(isset($_POST['newAccount']) OR isset($_POST['deposit']) OR isset($_POST['withdraw']) OR isset($_POST['transfer']) OR isset($_POST['validNewAccount']) OR isset($_POST['validWithdraw']) OR isset($_POST['validDeposit']) OR isset($_POST['validTransfer']))
{
	include('controlleurs/banking.php');
}
else
{
	include('controlleurs/index.php');
}


?>
