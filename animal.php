<?php
class Animal {
	private $age;
	private $poids;

	public function manger() {
		echo "je mange";
	}

	
	public function setAge($age) {
			$this->age = $age;
	}

	public function getAge() { 
			return $this->age;
	}


	public function viellir() {
		$this->age = $this->age + 1;
	}

}





?>
