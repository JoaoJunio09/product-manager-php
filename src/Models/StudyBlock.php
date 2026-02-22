<?php
class StudyBlock
{
	private $id;
	private $sprint_day_id;
	private $total_minutes; // Sempre: 2 horas (de seg a sex)

	public function __construct($id, $sprint_day_id, $total_minutes)
	{
		$this->id = $id;
		$this->sprint_day_id = $sprint_day_id;
		$this->total_minutes = $total_minutes;
	}

	public function getId(): int { return $this->id; }
	public function getSprintDayId(): int { return $this->sprint_day_id; }
	public function getTotalMinutes(): int { return $this->total_minutes; }
}