<?php
namespace Easy/Config;
class Config()
{
	public function __construct()
	{
		
	}
	public function readFile($file, $group = "DEFAULT")
	{
		require($file);
		$this->c[$group] = $config;
	}
	public function get($key, $group = "DEFAULT")
	{
		return $this->c[$group][$key];
	}
}
?>