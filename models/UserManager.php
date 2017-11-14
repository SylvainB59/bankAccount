<?php

class UserManager
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

	public function getUser($userId)
	{
		$req = $this->getBdd()->prepare('SELECT * FROM users WHERE id = :id');
		$req->execute(array('id' => $userId));
		$user = $req->fetch(PDO::FETCH_ASSOC);
		$user = new User($user);

		return $user;
	}
}
