<?php
class User
{
	protected $id;
	protected $userName;
	protected $userFirstName;

	public function __construct($array)
	{
		$this->hydrate($array);
	}

	public function hydrate($array)
	{
		foreach($array as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if(method_exists($this, $method))
			{
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
	public function getUserName()
	{
		return $this->userName;
	}

	/**
	 * @param mixed $userName
	 *
	 * @return self
	 */
	public function setUserName($userName)
	{
		$this->userName = $userName;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserFirstName()
	{
		return $this->userFirstName;
	}

	/**
	 * @param mixed $userFirstName
	 *
	 * @return self
	 */
	public function setUserFirstName($userFirstName)
	{
		$this->userFirstName = $userFirstName;

		return $this;
	}
}
