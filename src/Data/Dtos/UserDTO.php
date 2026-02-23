<?php

namespace App\Models;

class UserDTO
{
	private $id;
	private $fullname;
	private $username;

	public function __construct($id, $fullname, $username)
	{
		$this->id = $id;
		$this->fullname = $fullname;
		$this->username = $username;
	}

	public function getId(): int { return $this->id; }
	public function getFullname(): string { return $this->fullname; }
	public function getUsername(): string { return $this->username; }
}