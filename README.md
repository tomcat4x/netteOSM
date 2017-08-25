# netteOSM
OpenStreetMap for Nette Framework

This is a Component for showing POIs on a OSM Map with the leaflet Javascript library. You can set markers on different layers.
On the map it is possible to show or hide the different layers. 

<h2>Installation:</h2>

Copy the /src/components/leaflet folder somewhere in the Nette app folder. e.g. app/components

Copy the /src/assets/leaflet folder somewhere in your web-directory and link the leaflet.css and leaflet.js files in your latte template. 

Copy the /src/assets/leafletIcon folder somewhere in your web-directory and link the Leaflet.Icon.Glyph.css and Leaflet.Icon.Glyph.js files in your latte template. 

Add one or more of the following icon fonts to your web project:

FontAwesome
Mapkey Icons
Ionicons
Typicon
.....

Yo can use ervery other icon font you want. But you have to adapt the Leaflet.Icon.Glyph.css. 

<a href='http://www.fh19.de/nette/leaflet' target='_new'>Demo</a>

You can mix the icons of the fonts in a map.

<h2>Usage:</h2>

<h4>Presenter:</h4>

   <pre><code>
  protected function createComponentLeafletControl(){
        // create and configure component
        $lfc = new \tc4x\leafletMap\leafletControl();
        
        
        // add a fontawesome icon to the map
        $marker = $lfc->getMarker(54.4288,11.1931);
        $marker->setPrefix("fa");
        $marker->setIcon("bath");
        $marker->setIconColor("black");
        $marker->setMarkerColor("lightred");
        $marker->setHeadline("Holiday home");
        $marker->setText("<a href='http://www.ferienwohnung-fehmarn-burg.de/' target='_new'>Ferienwohnung Grosskopf</a>");
        $lfc->setMarker($marker,"Holiday home");
        
        
        //add a mapkey icon to the map
        $marker = $lfc->getMarker(54.411862714387,11.098079681396484);
        $marker->setIcon("camp_site");
        $marker->setPrefix("mki");
        $marker->setMarkerColor("darkred");
        $marker->setHeadline("Campground");
        $marker->setText("Camping Strukkamphuk");    
        $lfc->setMarker($marker,"Camping");   
        
        //add a mapkey icon to the map
        $marker = $lfc->getMarker(54.40460440086583,11.14214229863137);
        $marker->setIcon("camp_site");
        $marker->setPrefix("mki");
        $marker->setMarkerColor("blue");
        $marker->setHeadline("Campground");
        $marker->setText("Camping Miramar");    
        $lfc->setMarker($marker,"Camping");            
        
        //add a typicon icon to the map
        $marker = $lfc->getMarker(54.405768414614855,11.177000999450684);
        $marker->setPrefix("typcn");
        $marker->setIcon("weather-cloudy");
        $marker->setMarkerColor("purple");
        $marker->setHeadline("Campground");
        $marker->setText("Camping Wulfener Hals - Riechey Freizeitanlagen");    
        $lfc->setMarker($marker,"Camping");         
        
        return $lfc;
    }	ode></pre>


<h4>Template:</h4>

<pre><code>
{control leafletControl 54.4288,11.1929,16}
</code></pre>

The parameter are: logitude, latitude, zomm level
The map will be centered on given logitude and latitude

## Properties

$marker = $lfc->getMarker($lon,$lat);

The marker class supports following properties:

```js

	$lon 
	// Logitude set by constructor

	$lan
	// Langitude set by constructor

	public $prefix; -> public function setPrefix($prefix)...
	// the prefix of the icon font (typcn=Typicons, fa=Fontawesome, mki=Mapkey Icons...)

	public $icon; -> public function setIcon($icon)...
	// Icon that will be shown in the marker

	public $iconColor; -> public function setIconColor($iconColor)
	// Color of the icon (default = white)

	public $markerColor; -> public function setMarkerColor($markerColor)
	// Color of the marker. 
   	// Possible values are: red, darkred, lightred, orange, beige, green, darkgreen, lightgreen, 
	blue, darkblue, lightblue, purple, darkpurple, pink, cadetblue, white, gray, lightgray, black

   	public $headline; -> public function setHeadline($headline)
   	// Headline text in popup window
   
	public $text; -> public function setText($text)
    // Text in popup window. Can include HTML
});

## Categories

You can assign every marker to a category. The asinged categories are shown in layer top right in the map and you can
show/hide every assigned category.

$lfc->setMarker($marker,"Holiday home"); assigns the marker to the category "Holiday home". If a categorie does not exist, it will be created.

$lfc->setMarker($marker); assigns the marker to the categorie "standard" which is not be shown in the category layer. 
