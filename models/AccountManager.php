<?php

class AccountManager
{
	public function getBdd()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=bankAccount;charset=utf8', 'root', '');
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

	// Get one account with his Id
	public function getAccount($accountId)
	{
		$req = $this->getBdd()->prepare('SELECT * FROM accounts WHERE id = :id');
		$req->execute(array('id' => $accountId));
		$account = $req->fetch(PDO::FETCH_ASSOC);
		$account = new Account($account);

		return $account;
	}

	// Add a new account in db
	public function addAccount($account)
	{
		$req = $this->getBdd()->prepare('INSERT INTO accounts(accountName, balance, userId) VALUES (:accountName, :balance, :userId)');
		$req->execute(array(
			'accountName' => $account->getAccountName(),
			'balance' => $account->getBalance(),
			'userId' => $account->getUserId()
		));
	}

	// Update account in db
	public function updateAccount($account)
	{
		$req = $this->getBdd()->prepare('UPDATE accounts SET accountName = :newAccountName, balance = :newBalance WHERE id = :id');
		$req->execute(array(
			'id' => $account->getId(),
			'newAccountName' => $account->getAccountName(),
			'newBalance' => $account->getBalance()
		));
	}

	// Delete account in db
	public function deleteAccount($account)
	{
		$req = $this->getBdd()->prepare('DELETE FROM accounts WHERE id = :id');
		$req->execute(array('id' => $account->getId()));
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

	// transfer beetween accounts
	public function addAccount($account)
	{

	}
*/

	public function countAccount($userId)
	{
		$req = $this->getBdd()->prepare('SELECT COUNT(id) nbAccount FROM accounts WHERE userId = :userId');
		$req->execute(array('userId' => $userId));
		$nbAccount = $req->fetch(PDO::FETCH_ASSOC);
		// $nbAccount = $req->execute(array('userId' => $userId));
		return $nbAccount['nbAccount'];
	}
}
