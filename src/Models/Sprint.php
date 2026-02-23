<?php

namespace App\Models;
class Sprint
{
	private $id;
	private $start_date;
	private $end_date;
	private $status; // (planned, active, completed)
	private $created_at;

	public function __construct($id, $start_date, $end_date, $status, $created_at)
	{
		$this->id = $id;
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->status = $status;
		$this->created_at = $created_at;
	}

	public function getId(): int { return $this->id; }
	public function getStartDate(): DateTime { return $this->start_date; }
	public function getEndDate(): DateTime { return $this->end_date; }
	public function getStatus(): string { return $this->status; }
	public function getCreateAt(): DateTime { return $this->created_at; }
}