<?php

class Employee
{
	const COMPANY_NAME = "Mike's Widgets";
	private static $employees = array();
	private $name;
	private $salary;

	/**
	 * Creates a new employee
	 * @param  String 	name 	the name of the employee. Defaults to empty string.
	 * @author Brent Allen
	 **/
	public function Employee($name = "")
	{
		self::$employees[] = $this;
		//echo "Employee constructor run. There are now ".self::$numEmployees." employee(s)<br />";
		if(!empty($name))
		{
			$this->setName($name);
		}
	}

	/**
	 * Gets the current number of employees created.
	 *
	 * @return Number 	the current number of Employee objects created.
	 * @author Brent Allen
	 **/
	public static function numberEmployees()
	{
		return count(self::$employees);
	}

	/**
	 * Gets all employees created as an array.
	 *
	 * @return array 	An array of all employees created.
	 * @author Brent Allen
	 **/
	public static function allEmployees()
	{
		return self::$employees;
	}

	/**
	 * Formats and sets the name of the employee
	 *
	 * @param  String 	name 	the name of the Employee
	 * @return void
	 * @author Brent Allen
	 **/
	public function setName($name)
	{
		if(is_numeric($name))
		{
			throw new Exception("$name is not a name. Our employees are people not numbers.");
		}
		$this->name = ucwords(strtolower($name));
	}

	/**
	 * Gets the employee's name
	 *
	 * @return String 	The name of the employee
	 * @author Brent Allen
	 **/
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Sets the salary for the employee
	 * @param Number   sal	the amount the employee makes a year
	 * @return void
	 * @author Brent Allen
	 **/
	public function setSalary($sal)
	{
		if(!is_numeric($sal))
		{
			throw new Exception("Salary needs to be a number.");
		}
		$this->salary = $sal;
	}

	/**
	 * Returns a NICE view of the employee's salary
	 *
	 * @return String 	the employee's salary
	 * @author Brent Allen
	 **/
	public function niceSalary()
	{
		/*if(empty($this->salary))
		{
			return "$0.00";
		}*/
		setlocale(LC_MONETARY, "en_US");
		return money_format("%n", $this->salary);
	}

	public function __destruct()
	{
		//self::$numEmployees--;
		//TODO: remove emp from static array
	}
}