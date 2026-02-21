<?php

class Product
{
	private $id;
	private $name;
	private $price;
	private $amount;
	private $status;

	public function __construct($id, $name, $price, $amount, $status)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->amount = $amount;
		$this->status = $status;
	}

	public function getId(): int { return $this->id; }

	public function getName(): string { return $this->name; }

	public function getPrice(): float { return $this->price; }

	public function getAmount(): int { return $this->amount; }

	public function getStatus(): string { return $this->status; }
}