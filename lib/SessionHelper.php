<?php

namespace Lib;

class SessionHelper
{
	public static function CurrentUser()
	{
		if (self::ActiveSession())
			return $_SESSION['login'];

		return null;
	}

	public static function ActiveSession()
	{
		return isset($_SESSION['login']);
	}

	public static function SetSession($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function SetLoginSession($value)
	{
		self::SetSession('login', $value);
	}

	public static function UnsetSession($key)
	{
		if (isset($_SESSION[$key]))
			unset($_SESSION[$key]);
	}

	public static function UnsetLoginSession()
	{
		self::UnsetSession('login');
	}
}

?>