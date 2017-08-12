# netteOSM
OpenStreetMap for Nette Framework

This is a Component for showing POIs on a OSM Map with the leaflet Javascript library. You can set markers on different layers.
On the map it is possible to show or hide the different layers. 

Installation:

Copy the lefalet folder somewhere in the Nette app folder. e.g. app/components

Copy the assets/leflet folder somewhere in your web-dirctory and link the leaflet.css and leaflet.js files in your latte template. 

Usage:

<h2>Presenter:</h2>

   <pre><code>
   protected function createComponentLeafletControl(){
        // create and configure component
        $ol = new \tc4x\leafletControl();
        $ol->setMarker(54.4288,11.1931,"POI1","Layer1");
        $ol->setMarker(54.4188,11.1951,"POI2","Layer2");
        return $ol;
    }	
    </code></pre>


<h2>Template:</h2>

<pre><code>
{control leafletControl 54.4288,11.1929,16}
</code></pre>

The parameter are: logitude, latitude, zomm level
The map will be centered on given logitude and latitude



