<?php
if(empty($_GET['data']))
{
	die("Stop screwing with my page. I know who you are. I've logged your IP address: ".$_SERVER['REMOTE_ADDR'].". I'm coming for you!");
}

switch($_GET['data'])
{
	case "op1":
		?>
		<p>This is option 1</p>
		<?php
	break;
	case "op2":
		?>
		<p>This is option 2</p>
		<?php
	break;
	case "op3":
		?>
		<p>This is option 3</p>
		<?php
	break;
	case "op4":
		?>
		<p>This is option 4</p>
		<?php
	break;
	default:
		echo "???";
	break;
}