<?php

interface ShapeInterface{

	public function area();

}

interface SolidShapeInterface{

	public function volume();

}

interface ManageShapeInterface{

	public function calculate();

}

class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface-{

	public function area(){
		
		/*Do stuff here*/
	
	}

	public function volume(){
	
		/*Do stuff here*/
	
	}

	public function calculate(){
		return $this->area() + $this->volume();
	}
}
?>
