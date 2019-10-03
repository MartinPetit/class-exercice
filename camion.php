<?php

class camion extends vehicules {

	public function parcourir($nb_km) {
		return $this->nb_km = $nb_km*90;
	
	}
	
}

?>