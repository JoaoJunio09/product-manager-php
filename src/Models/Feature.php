<?php

class Feature 
{
	private $id;
	private $sprint_id;
	private $title;
	private $description;
	private $start_day_id; // (FK SprintDay)
	private $end_day_id; // (FK SprintDay)

	public function __construct($id, $sprint_id, $title, $description, $start_day_id, $end_day_id)
	{
		$this->id = $id;
		$this->sprint_id = $sprint_id;
		$this->title = $title;
		$this->description = $description;
		$this->start_day_id = $start_day_id;
		$this->end_day_id = $end_day_id;
	}

	public function getId(): int { return $this->id; }
	public function getSprintId(): int { return $this->sprint_id; }
	public function getTitle(): string { return $this->title; }
	public function getDescription(): string { return $this->description; }
	public function getStartDayId(): int { return $this->start_day_id; }
	public function getEndDayId(): int { return $this->end_day_id; }
}