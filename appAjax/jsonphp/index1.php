<?php 

$phpArray = array("hà nội","hồ chí minh","đà nẵng");

/**
 * 
 */
class Student
{
	public $name;
	public $age;
	public $location;
	function __construct($name,$age,$location)
	{
		$this->name;
		$this->age;
		$this->location;
	}
}

$thanh = new Student ("bùi đức thành","21","hà nội");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($thanh);
echo "</pre>";

$phpJson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($thanh);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";
?>