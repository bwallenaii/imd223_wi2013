<?php
require_once("table.php");
require_once("color.php");
class Product extends Table
{
	protected $tableName = "products";

	public function colors()
	{
		$colors = $this->getArray("SELECT * FROM `colors` where `product_id` = $this->id");
		$ret = array();
		foreach($colors as $color)
		{
			$ret[] = new Color($color);
		}

		return $ret;
	}

	public function implodeColors($delimiter = ", ")
	{
		$colors = $this->colors();
		$colorNames = array();
		foreach($colors as $color)
		{
			$colorNames[] = $color->color;
		}
		return implode($delimiter, $colorNames);
	}
}