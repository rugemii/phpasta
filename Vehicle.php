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