<?php
// var_dump($_POST);

function loadClass($class)
{
	if($class == 'AccountManager')
	{
		require('models/' . $class . '.php');
	}
	else
	{
		require('models/entities/' . $class . '.php');
	}
}

spl_autoload_register('loadClass');

$accountManager = new AccountManager();
var_dump($accountManager);

if(isset($_POST['newAccount']) OR isset($_POST['deposit']) OR isset($_POST['withdraw']) OR isset($_POST['transfer']))
{
	include('controlleurs/banking.php');
}
else
{
	include('controlleurs/index.php');
}


?>
