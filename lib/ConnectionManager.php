<?php

namespace Lib;

class ConnectionManager
{
	public static function GetConnection($connection)
	{
		return new \mysqli($connection['host'],
								 $connection['login'],
								 $connection['password'],
								 $connection['database'],
								 $connection['port']);
	}
}

?>