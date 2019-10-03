<?php


class Lion implements iAnimal{
	public function chasser() {
		echo "je chasse";
	}

		public function manger() {
		echo "je mange";
	}

	
	public function setAge($age) {
			$this->age = $age;
	}

	public function getAge() { 
			return $this->age;
	}

}


?>