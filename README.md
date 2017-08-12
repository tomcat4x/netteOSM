# netteOSM
OpenStreetMap for Nette Framework

This is a Component for showing POIs on a OSM Map with the leaflet Javascript library. You can set markers on different layers.
On the map it is possible to show or hide the different layers. 

<h2>Installation:</h2>

Copy the lefalet folder somewhere in the Nette app folder. e.g. app/components

Copy the assets/leflet folder somewhere in your web-dirctory and link the leaflet.css and leaflet.js files in your latte template. 

<h2>Usage:</h2>

<h4>Presenter:</h4>

   <pre><code>
   protected function createComponentLeafletControl(){
        // create and configure component
        $ol = new \tc4x\leafletControl();
        $ol->setMarker(54.4288,11.1931,"POI1","Layer1");
        $ol->setMarker(54.4188,11.1951,"POI2","Layer2");
        return $ol;
    }	
    </code></pre>


<h4>Template:</h4>

<pre><code>
{control leafletControl 54.4288,11.1929,16}
</code></pre>

The parameter are: logitude, latitude, zomm level
The map will be centered on given logitude and latitude



