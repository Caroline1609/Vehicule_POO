<?php
require_once ('Voiture.php');

/**
 * @author fchatelot
 * @version 1.0
 * @created 19-nov.-2025 10:20:48
 */
class Voiturecourse extends Voiture
{



	/**
	 * 
	 * @param _marque
	 * @param _modele
	 * @param _poids
	 * @param _maqueMoteur
	 * @param _vitesseMax
	 */
	function __construct(string $_marque, string $_modele, string $_marqueMoteur, int $_vitesseMax, float $_poids = 1000)
	{
		if ($_marqueMoteur == $_marque) {
			parent::__construct($_marque, $_modele, $_marqueMoteur, $_vitesseMax, $_poids);
		} else {
			throw new Exception("la voiture et le moteur doient etre de la même marque");
		}
		
	}

	function toString() : string
	{
		return "Véhicule de course " . parent::__toString();
	}

	/**
	 * Moteur.vitesseMax - (Voiture.poids x 5%).
	 */
	function vitesseMax()
	{
		return $this->sonMoteur->getVitesseMax() - ($this->poids * 0.05);

	}

	

}
?>