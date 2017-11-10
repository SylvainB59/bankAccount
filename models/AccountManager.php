<?php

class AccountManager
{
	public function getBdd()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=bankAccount;charset=utf8', 'root', 'Neosyl59');
		}
		catch (Exection $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		return $bdd;
	}

	// Get all accounts in db
	public function getAccounts()
	{
		$req = $this->getBdd()->query('SELECT * FROM accounts');
		$accounts = $req->fetchAll(PDO::FETCH_ASSOC);
		foreach($accounts as $key =>$value)
		{
			$accounts[$key] = new Account($value);
		}

		return $accounts;
	}

	// Add a new account
	public function addAccount($account)
	{
		$req = $this->getBdd()->prepare('INSERT INTO accounts(accountName, balance, userId) VALUES (:accountName, :balance, :userId)');
		$req->execute(array(
			'accountName' => $account->getAccountName(),
			'balance' => $account->getBalance(),
			'userId' => $account->getUserId()
		));
	}
/*
	// Deposit in an account
	public function addAccount($account)
	{

	}

	// Withdraw account
	public function addAccount($account)
	{

	}

	// transfert beetween accounts
	public function addAccount($account)
	{

	}
*/
}
