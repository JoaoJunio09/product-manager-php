<?php

class Task 
{
	private $id;
	private $feature_id;
	private $sprint_day_id;
	private $title;
	private $description;
	private $status; // (pending, doing, done)
	private $estimated_minutes;
	private $created_at;

	public function __construct(
		$id, 
		$feature_id, 
		$sprint_day_id, 
		$title, 
		$description, 
		$status, 
		$estimated_minutes, 
		$created_at
	) {
		$this->id = $id;
		$this->feature_id = $feature_id;
		$this->sprint_day_id = $sprint_day_id;
		$this->title = $title;
		$this->description = $description;
		$this->status = $status;
		$this->estimated_minutes = $estimated_minutes;
		$this->created_at = $created_at;
	}

	public function getId(): int { return $this->id; }
	public function getFeatureId(): int { return $this->feature_id; }
	public function getSprintDayId(): int { return $this->sprint_day_id; }
	public function getTitle(): string { return $this->title; }
	public function getDescription(): string { return $this->description; }
	public function getStatus(): string { return $this->status; }
	public function getEstimatedMinutes(): int { return $this->estimated_minutes; }
	public function getCreatedAt(): DateTime { return $this->created_at; }
}