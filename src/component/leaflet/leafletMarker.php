<?php 
namespace tc4x\leafletMap;

class leafletMarker{

	public $lon;
	public $lat;
	public $layer;
	public $prefix;
	public $icon;
	public $iconColor = "white";
	public $markerColor;
	public $headline;
	public $text;
	
	
	function __construct($lon,$lat){
		$this->lon = $lon;
		$this->lat = $lat;
		$this->layer = "standard";
	}
	
	public function setLayer($layer){
		$this->layers->addLayer($layer);
		$this->layer = $layer;
	}
	
	public function setPrefix($prefix){
		$this->prefix = $prefix;
	}

	public function setIcon($icon){
		$this->icon = $icon;
	}

	public function setIconColor($iconColor){
		$this->iconColor=$iconColor;
	}
	
	public function setMarkerColor($markerColor){
		$this->markerColor = $markerColor;
	}
	
	public function setHeadline($headline){
		$this->headline = $headline;
	}
	
	public function setText($text){
		$this->text = $text;
	}			
	
}