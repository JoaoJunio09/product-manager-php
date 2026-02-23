<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Models\User;
use App\Models\UserDTO;

class UserService
{
	private UserRepository $repository;

	public function __construct()
	{
		$this->repository = new UserRepository();
	}
	
	public function findByUsername($username): UserDTO 
	{
		return self::convertEntityToDTO($this->repository->findByUsername($username));
	}

	public function create(User $user): bool
	{
		return $this->repository->create($user);
	}

	private function convertEntityToDTO(User $entity): UserDTO
	{	
		return new UserDTO(
			$entity->getId(),
			$entity->getFullname(),
			$entity->getUsername()
		);
	}
}