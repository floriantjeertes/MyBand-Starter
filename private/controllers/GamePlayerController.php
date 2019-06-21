<?php

/**
 * Class FacilitiesController
 *
 * Deze handelt de logica van de alle te vrhuren huisje sop de camping af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class GameplayerController {

	function Gameplayer(){
		$number = '1';
		include __DIR__ . '/../views/header.php';




		include __DIR__ . '/../views/nesEmu.php';




		include __DIR__ . '/../views/footer.php';

	}

}
