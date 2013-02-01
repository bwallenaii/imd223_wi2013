<?php
require_once("employee.php");

class HourlyEmployee extends Employee
{
	const HoursPerYear = 2080;

	public function HourlyEmployee($name = "")
	{
		parent::Employee($name); //option 1
		//parent::__construct($name); //option 2
	}

	public function niceWage()
	{
		setlocale(LC_MONETARY, "en_US");
		return money_format("%n", $this->wage);
	}

	public function __get($key)
	{
		switch($key)
		{
			case "wage":
				return $this->_salary / self::HoursPerYear;
			break;
			case "formattedWage":
				return $this->niceWage();
			break;
			default:
				return parent::__get($key);
			break;
		}
	}

	public function __set($key, $val)
	{
		switch($key)
		{
			case "wage":
			case "salary":
				$this->_salary = $val * self::HoursPerYear;
			break;
			default:
				parent::__set($key, $val);
			break;
		}
	}
}