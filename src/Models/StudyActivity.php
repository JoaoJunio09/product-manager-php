<?php

namespace App\Models;

class StudyActivity
{
	private $id;
	private $study_block_id;
	private $title;
	private $duration_minutes;

	public function __construct($id, $study_block_id, $title, $duration_minutes)
	{
		$this->id = $id;
		$this->study_block_id = $study_block_id;
		$this->title = $title;
		$this-> $duration_minutes;
	}

	public function getId(): int { return $this->id; }
	public function getStudyBlockId(): int { return $this->study_block_id; }
	public function getTitle(): string { return $this->title; }
	public function getDurationMinutes(): int { return $this->duration_minutes; }
}