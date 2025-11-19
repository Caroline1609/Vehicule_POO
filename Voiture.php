<?php

/**
 * @author fchatelot
 * @version 1.0
 * @created 19-nov.-2025 10:20:44
 */
class Voiture
{

	//attributs voiture
	protected string $marque;
	protected string $modele;
	protected int $poids;
	protected Moteur $sonMoteur;

	//propriété

	function getleMoteur()
	{
		return $this->sonMoteur;
	}

	function getmarque()
	{
		return $this->marque;
	}

	function getmodele()
	{
		return $this->modele;
	}

	function getpoids()
	{
		return $this->poids;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setleMoteur(Moteur  $newVal)
	{
		$this->sonMoteur = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setpoids(int $newVal)
	{
		$this->poids = $newVal;
	}

	/**Constructeur voiture */
/**
	 * 
	 * @param _marque
	 * @param _modele
	 * @param _poids
	 * @param _maqueMoteur
	 * @param _vitesseMax
	 */

	public function __construct( string $_marque, string $_modele, string $_marqueMoteur, float $_vitesseMax, int $_poids= 1000)
	{
		$this->marque = $_marque;
        $this->modele = $_modele;
        $this->poids = $_poids;
		$this->sonMoteur = new Moteur($_vitesseMax, $_marqueMoteur);
	}
	function __toString()
	{$test = "voiture de série ayant pour marque : $this->marque<br>";
		$test .= "Modèle : $this->modele<br>";
		$test .= "Poids : $this->poids kg<br> ayant pour ";
		$test .= $this->sonMoteur;
		$test.= "<br> vitesse max de la voiture : " . $this->vitesseMax() . " km/h ";
		return $test;
	}
	
	
		

	/**
	 * Moteur.vitesseMax - (Voiture.poids x 30%).
	 */
	function vitesseMax()
	{
		return $this->sonMoteur->getvitesseMax() - ($this->poids * 0.30)/1000;
	}
}