<?php

namespace App\Repositories;

use App\Core\Database;
use App\Models\User;
use Exception;
use PDO;

class UserRepository
{
	private PDO $connection;

	public function __construct()
	{
		$this->connection = Database::getConnection();
	}

	public function findByUsername($username): User {
		$stmt = $this->connection->prepare(
		"SELECT * FROM user WHERE username = ?"
		);

		$stmt->execute([$username]);
		$data = $stmt->fetch(PDO::FETCH_ASSOC);

		if (!$data) {
			throw new Exception("Data is null [method: findByUsername]");
		}

		return new User(
			$data['id'],
			$data['full_name'],
			$data['usename'],
			$data['password']
		);
	}

	public function create(User $user): bool {
		$stmt = $this->connection->prepare(
		"INSERT INTO user (id, full_name, username, password) VALUES (?, ?, ?, ?)"
		);
		return $stmt->execute([
			$user->getId(), 
			$user->getFullname(), 
			$user->getUsername(), 
			$user->getPassword()
		]);
	}
}