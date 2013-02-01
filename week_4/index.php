<?php 
	require_once("classes/employee.php") ;
	require_once("classes/hourlyemployee.php");
?>
<html>
<head>
	<title>Class Example</title>
</head>
<body>
<?php
	$emp1 = new Employee("Bob Sanders");
	$emp1->salary = 89362.79;
	$emp2 = new Employee();
	$emp2->name = "fred fLinStone";
	$emp2->salary = 15012.17;
	$emp3 = new Employee("barBara WalteRs");
	new Employee("barney rubble");
	$emp4 = new HourlyEmployee("Bobby Sue");
	$emp4->wage = 14.50;

	//echo $emp1->notreal."<br />";
	//echo $emp1->thisisfake."<br />";
	//echo $emp1->furby."<br />";
	echo $emp1->numEmployees."<br />";
	echo $emp1->name."<br />";
?>

<div>
	<p>
		There are currently <?php echo Employee::numberEmployees(); ?> employees
		of <?php echo Employee::COMPANY_NAME; ?>. They are 
		<ul>
		<?php
			foreach(Employee::allEmployees() as $employee)
			{
				if($employee instanceof HourlyEmployee)
				{
					echo "<li>$employee->name: $employee->formattedWage / hour (estimated $employee->dollars / year)</li>\r\n";
				}
				else
				{
					echo "<li>$employee->name: $employee->dollars</li>\r\n";
				}
			}
		?>
		</ul>
	</p>
</div>

</body>
</html>