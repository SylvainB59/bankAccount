<?php

if(isset($_POST['validNewAccount'])) //create a new account
{
	if(isset($_POST['accountName'], $_POST['balance'], $_POST['userId']))
	{
		// write in a tab ths $_POST needed
		$tab = ['accountName' => $_POST['accountName'], 'balance' => $_POST['balance'], 'userId' => $_POST['userId']];

		// Create a new obj Account with tab in attribut
		$newAccount = new Account($tab);

		// Add new account in db
		$AccountManager->addAccount($newAccount);

		header('location: ');
	}
}
// elseif(isset($_POST['index']))
// {
// 	header('location: ');
// }


include('views/bankingView.php');
