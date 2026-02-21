<?php

class Product 
{
	public int $id;
	public string $name;
	public string $price;
	public function __construct(
		int $id, 
		string $name, 
		string $price
	) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
}