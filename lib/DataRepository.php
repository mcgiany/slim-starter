<?php

namespace Lib;

class DataRepository
{
	private $conn; //mysqli instance

	public function __construct($connection)
	{
		$this->conn = $connection;
	}
}

?>