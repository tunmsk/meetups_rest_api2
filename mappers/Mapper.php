<?php

abstract class Mapper{
	protected $db;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}
}