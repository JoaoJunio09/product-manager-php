<?php

namespace App\Controllers;

use App\Models\User;
use App\Services\UserService;

class UserController
{

	private UserService $service;

	public function __construct()
	{
		$this->service = new UserService();
	}

	public function findByUsername($username)
	{
		$this->service->findByUsername($username);
	}

	public function create()
	{
		$data = json_encode(file_get_contents("php://input", true));

		$user = new User(
			null,
			$data['fullname'],
			$data['username'],
			$data['password']
		);

		$success = $this->service->create($user);

		echo json_encode(['success' => $success]);
	}
}