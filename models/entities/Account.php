<?php

class Account
{
	protected $id;
	protected $accountName;
	protected $balance;
	protected $userId;

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
			if(method_exists($this, $method))
			{
        // Calling the setter.
				$this->$method($value);
			}
		}
	}

  // Getters and Setters

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
      $this->balance = (int)$balance;

      return $this;
  }

  /**
   * @return mixed
   */
  public function getUserId()
  {
      return $this->userId;
  }

  /**
   * @param mixed $userId
   *
   * @return self
   */
  public function setUserId($userId)
  {
      $this->userId = $userId;

      return $this;
  }

  // Methods

  public function withdraw($amount)
  {
    $newBalance = $this->getBalance() - $amount;
    $this->setBalance($newBalance);
  }

  public function deposit($amount)
  {
    $newBalance = $this->getBalance() + $amount;
    $this->setBalance($newBalance);
  }

  
}
