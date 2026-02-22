<?php

class SprintDay
{
	private $id;
	private $sprint_id; // pertence a uma Sprint
	private $date;
	private $day_of_week;

	public function __construct($id, $sprint_id, $date, $day_of_week)
	{
		$this->id = $id;
		$this->sprint_id = $sprint_id;
		$this->date = $date;
		$this->day_of_week = $day_of_week;
	}

	public function getId(): int { return $this->id; }
	public function getSprintId(): int { return $this->sprint_id; }
	public function getDate(): DateTime { return $this->date; }
	public function getDayOfweek(): int { return $this->day_of_week; }
}