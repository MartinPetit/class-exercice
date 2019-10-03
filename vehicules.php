<?php

class vehicules {
	private $nb_passagers=0;
	protected $nb_km;

	public function setPassagers($nb_passagers) {
		$this->nb_passagers = $nb_passagers;
	}

	public function getPassagers() {
		return $this->nb_passagers;
	}


	public function monter($nb_passagers) {
		return $this->nb_passagers += $nb_passagers;
	}

	public function descendre($nb_passagers) {
		return $this->nb_passagers -= $nb_passagers;
	}

	public function getnbKms() {
		return $this->nb_km;
	}










}


?>