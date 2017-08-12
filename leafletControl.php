<?php 
namespace tc4x;

use Nette\Application\UI\Control;

class leafletControl extends Control{

	public $long;
	public $lat;
	public $zoom;
	public $markers = array();
	public $layers = array();
	
	
	public function setMarker($long,$lat,$content,$categorie="standard"){
		$newMarker = array();
		$newMarker['content'] = $content;
		$newMarker['long'] = $long;
		$newMarker['lat'] = $lat;
		
		$categorieName = $categorie;
		$categorie = preg_replace('/\s+/','',$categorie);
		$this->layers[$categorie] = $categorieName;
		
		if (array_key_exists($categorie,$this->markers)) {
    		array_push($this->markers[$categorie],$newMarker);
		}else{
			$this->markers[$categorie][0] = $newMarker;	
		}	
		
	}
	
	public function render($long=0,$lat=0,$zoom=1){
    	$template = $this->template;
    	$template->setFile(dirname(__FILE__) . '/leafletControl.latte');
    	$template->long = $long;
    	$template->lat = $lat;
    	$template->zoom = $zoom;
    	$template->markers = $this->markers;
    	$template->layers = $this->layers;
    	// render it
    	$template->render();
	}	


	
}