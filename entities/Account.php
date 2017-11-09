<?php

class Account
{
	protected $id;
	protected $accountName;
	protected $balance;
	protected $user;

	public function __construct($array)
	{
		$this->hydrate($array);
	}

	public function hydrate($array)
	{
		foreach($array as $key => $value)
		{
      // Recovering setter name corresponding to an attribut.
			$method = 'set'.ucfirst($key);
      // If corresponding setter exist.
			if(methode_exist($this, $method))
			{
        // Calling the setter.
				$this->$method($value);
			}
		}
	}

  /**
   * @return mixed
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * @param mixed $id
   *
   * @return self
   */
  public function setId($id)
  {
      $this->id = $id;

      return $this;
  }

  /**
   * @return mixed
   */
  public function getAccountName()
  {
      return $this->accountName;
  }

  /**
   * @param mixed $accountName
   *
   * @return self
   */
  public function setAccountName($accountName)
  {
      $this->accountName = $accountName;

      return $this;
  }

  /**
   * @return mixed
   */
  public function getBalance()
  {
      return $this->balance;
  }

  /**
   * @param mixed $balance
   *
   * @return self
   */
  public function setBalance($balance)
  {
      $this->balance = $balance;

      return $this;
  }

  /**
   * @return mixed
   */
  public function getUser()
  {
      return $this->user;
  }

  /**
   * @param mixed $user
   *
   * @return self
   */
  public function setUser($user)
  {
      $this->user = $user;

      return $this;
  }
}
