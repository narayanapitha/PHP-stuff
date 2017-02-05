<?php
interface ShapeInterface
	{
	public

	function area();
	}

interface SolidShapeInterface
	{
	public

	function volume();
	}

interface ManageShapeInterface
	{
	public

	function calculate();
	}

class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface

	{
	public

	function area()
		{
		/*Do stuff here*/
		return 10;
		}

	public

	function volume()
		{
		/*Do stuff here*/
		return $this->area() * 20;
		}

	public

	function calculate()
		{
		return $this->area() + $this->volume();
		}
	}

$val = new Cuboid();
echo $val->calculate();
