<?php

class Vehicle {
	public __constructor($vehicleName, $vehicleModelName) {
		return $vehicleName . " " . $vehicleModelName;
	}
}

class Car extends Vehicle {
	public $doors = 4;
	public $passengerCapacity = 4;
	public __constructor ($carName, $modelName, $color) {
		return [$carName, $modelName, $color];
	}
}

?>

<?php

abstract class AbstractVehicle {
	
	public $make;
	public $model;
	public $color;
	protected $noOfWheels;
	private $engineNumber;
	public static $counter = 0;
	protected $engineStatus = false;
}

class Car extends AbstractVehicle {
	
	public $doors = 4;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'Manual';
	private $hasKeyInIgnition = true;

	public function start() {
		$this->engineStatus = true;
	}
}