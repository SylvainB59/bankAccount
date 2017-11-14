<?php

// Get all accounts in db
$accounts = $AccountManager->getAccounts();

if(isset($_POST['validNewAccount']))
// Create a new account
{
	if(isset($_POST['accountName'], $_POST['balance'], $_POST['userId']))
	{
		// write in a tab the $_POST needed
		$tab = ['accountName' => $_POST['accountName'], 'balance' => $_POST['balance'], 'userId' => $_POST['userId']];

		// Create a new obj Account with tab in attribut
		$newAccount = new Account($tab);

		// Add new account in db
		$AccountManager->addAccount($newAccount);
	}
}
elseif(isset($_POST['validWithdraw']))
// Withdraw on an account
{
	$amount = (int)$_POST['amount'];

	// Get the obj account by his id
	$accountToWithdraw = $AccountManager->getAccount($_POST['accountId']);

	// If 0 < amount < actual balance
	if($amount > 0 AND $amount <= $accountToWithdraw->getBalance())
	{
		// Withdraw the amount
		$accountToWithdraw->withdraw($amount);
		// Update account in db
		$AccountManager->updateAccount($accountToWithdraw);
	}
}
elseif(isset($_POST['validDeposit']))
// Deposit on an account
{
	$amount = (int)$_POST['amount'];

	// Get the obj account by his id
	$accountToDeposit = $AccountManager->getAccount($_POST['accountId']);

	// If 0 < amount
	if($amount > 0)
	{
		// Deposit the amount
		$accountToDeposit->deposit($amount);
		// Update account in db
		$AccountManager->updateAccount($accountToDeposit);
	}
}
elseif(isset($_POST['validTransfer']))
// Transfer beetween account
{
	$amount = (int)$_POST['amount'];

	// Get the obj Account to withdraw
	$accountToWithdraw = $AccountManager->getAccount($_POST['accountIdToWithdraw']);
	// Get the obj account t odeposit
	$accountToDeposit = $AccountManager->getAccount($_POST['accountIdToDeposit']);

	if($amount > 0 AND $amount <= $accountToWithdraw->getBalance())
	{
		$accountToWithdraw->transfer($amount, $accountToDeposit);
		$AccountManager->updateAccount($accountToWithdraw);
		$AccountManager->updateAccount($accountToDeposit);
	}
}
// elseif(isset($_POST['index']))
// {
// 	header('location: ');
// }


include('views/bankingView.php');
