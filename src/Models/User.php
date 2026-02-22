<?php

class User
{
	private $id;
	private $fullname;
	private $username;
	private $password;

	public function __construct($id, $fullname, $username, $password)
	{
		$this->id = $id;
		$this->fullname = $fullname;
		$this->username = $username;
		$this->password = $password;
	}

	public function getId(): int { return $this->id; }
	public function getFullname(): string { return $this->fullname; }
	public function getUsername(): string { return $this->username; }
	public function getPassword(): int { return $this->password; }
}