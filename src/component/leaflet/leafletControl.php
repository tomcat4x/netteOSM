<?php 
namespace tc4x\leafletMap;

use Nette\Application\UI\Control;
use Tracy\Debugger;

class leafletControl extends Control{

	public $layers = array();
	
	
	public function getMarker($lon,$lat){
		$marker = new leafletMarker($lon,$lat);
		return $marker;
	}
	

	public function setMarker($marker,$categorie="standard"){
		$categorieName = $categorie;
		// delete whitespaces because in javascript whitepaces for layer name are not allowed
		$categorie = preg_replace('/\s+/','',$categorie);
		
		$this->layers[$categorie]['name'] = $categorieName;
		$this->layers[$categorie]['markers'][] = $marker;

	
	}
	
	public function render($lon=0,$lat=0,$zoom=1){
    	$template = $this->template;
    	$template->setFile(dirname(__FILE__) . '/leafletControl.latte');
    	$template->lon = $lon;
    	$template->lat = $lat;
    	$template->zoom = $zoom;
    	$template->layers = $this->layers;
    	// render it
    	$template->render();
	}	


	
}