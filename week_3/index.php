<?php 
	require_once("classes/employee.php") ;
?>
<html>
<head>
	<title>Class Example</title>
</head>
<body>
<?php
	$emp1 = new Employee("Bob Sanders");
	$emp1->setSalary(89362.79);
	$emp2 = new Employee();
	$emp2->setName("fred fLinStone");
	$emp2->setSalary(15012.17);
	$emp3 = new Employee("barBara WalteRs");
	new Employee("barney rubble");
?>

<div>
	<p>
		There are currently <?php echo Employee::numberEmployees(); ?> employees
		of <?php echo Employee::COMPANY_NAME; ?>. They are 
		<ul>
		<?php
			foreach(Employee::allEmployees() as $employee)
			{
				echo "<li>".$employee->getName()." : ".$employee->niceSalary()."</li>\r\n";
			}
		?>
		</ul>
	</p>
</div>

</body>
</html>