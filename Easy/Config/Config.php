<?php
namespace Easy/Config;
class Config()
{
	public function __construct()
	{
		require("../config/config.php");
		$this->c = $config;
	}
	public function get($key)
	{
		return $this->c[$key];
	}
}
?>