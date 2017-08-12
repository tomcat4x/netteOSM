# netteOSM
OpenStreetMap for Nette Framework

This is a Component for showing POIs on a OSM Map with the leaflet Javascript Framework.

Installation:

Copy the lefalet folder somewhere in the Nette app folder. 
e.g. app/components

Copy the assets/leflet folder somewhere in your web-dirctory and link the css and js files in your html-page. 

Usage:

Presenter: 

   <pre><code>
   protected function createComponentLeafletControl(){
        // create and configure component
        $ol = new \tc4x\leafletControl();
        $ol->setMarker(54.4288,11.1931,"<h5>Ferienwohung Grosskopf</h5>","Fewo mit Klo2");
        $ol->setMarker(54.4188,11.1951,"<h5>Ferienwohung Sonstwas</h5>","Fewo mit Klo");
        return $ol;
    }	
    </code></pre>

Template: 
<pre><code>
{control leafletControl 54.4288,11.1929,16}
</code></pre>
