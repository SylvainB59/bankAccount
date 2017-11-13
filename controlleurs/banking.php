<?php

// Get all accounts in db
$accounts = $AccountManager->getAccounts();

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

	}

}
elseif(isset($_POST['validWithdraw']))
{
	$amount = (int)$_POST['amount'];
	$accountToWithdraw = $AccountManager->getAccount($_POST['accountId']);

	if($amount > 0 AND $amount <= $accountToWithdraw->getBalance())
	{
		$accountToWithdraw->withdraw($amount);
		$AccountManager->updateAccount($accountToWithdraw);
	}
}
// elseif(isset($_POST['index']))
// {
// 	header('location: ');
// }


include('views/bankingView.php');
