<?php 

class DatabaseSingleton {

	private function __construct() {
		// $this->phpDataObj = new PDO();
	}

	public static function instance() {
		// static means it's value changes through out
		static $instance;
		// the variable was used to determine the instance of the object
		// if it's instance
		if (is_null($instance)) {
			// then create a new static instance
			$instance = new static;
		}
		// then return it, if an attempt was made to instantiate this class
		// the previous instance will be checked and returned
		return $instance;
	}
}

$firstDatabaseSingleton = DatabaseSingleton::instance();
$secondDatabaseSingleton = DatabaseSingleton::instance();

if ($firstDatabaseSingleton === $secondDatabaseSingleton) {
	echo "yes same instance" . PHP_EOL;
}

?>