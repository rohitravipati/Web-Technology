/***
 *Gets a list of places related to the searched keywords
 *
 ***/
    function getPlaces(){
        var baseurl="https://query.yahooapis.com/v1/public/yql?q=";
        var query="select * from geo.places(1) where text=";
     var xhttp = new    XMLHttpRequest();
    xhttp.onreadystatechange = function(){if (this.readyState ==    4 && this.status == 200) {
        placesresults(JSON.parse(this.responseText));
        }}; 
            
            xhttp.open("GET", baseurl+encodeURIComponent(query+"\""+document.getElementById('wfield').value+"\"")+"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys", true);
            xhttp.send();
    }
    
    /***
 *Checks if the fields in 'res' contain results
 *and populates the div with id 'places'
 *
 ***/
    function placesresults(res) {
        console.log(res);
        var places=document.getElementById('places');
        places.innerHTML="";
        var rplaces=res.query.results.place;
        if (rplaces.locality2!=null) {
            populate(places, rplaces.locality2);
        }
        if (rplaces.locality1!=null) {
            populate(places, rplaces.locality1);
        }
        
        if (rplaces.admin3!=null) {
            populate(places, rplaces.admin3);
        }
        if (rplaces.admin2!=null) {
            populate(places, rplaces.admin2);
        }
        if (rplaces.admin1!=null) {
            populate(places, rplaces.admin1);
        }

            
    }
    
    /***
 *Adds a line to the div with id 'places' every time it's calleds
 *
 ***/
    function populate(places, locality) {
        var anc=document.createElement('a');
        anc.innerHTML=locality.type +" <b>"+locality.content+"</b>";
        anc.setAttribute("onclick","forecast("+locality.woeid+")");
        
        places.appendChild(anc);
        places.appendChild(document.createElement('br'));
    }
    
    /***
 * Gets the forecast for the places with the given woeid
 *
 ***/
    function forecast(woeid) {
        
        var baseurl="https://query.yahooapis.com/v1/public/yql?q=";
        var query="select * from weather.forecast where woeid in ("+woeid+")";
     var xhttp = new    XMLHttpRequest();
    xhttp.onreadystatechange = function(){if (this.readyState ==    4 && this.status == 200) {
        var fcr=(JSON.parse(this.responseText));
         var fc=document.getElementById('forecast');
         var chan=fcr.query.results.channel;
         console.log(chan);
         var lines=chan.item.description.replace("<![CDATA[", "").replace("]]>", "");
         fc.innerHTML=lines;
        }}; 
            
            xhttp.open("GET", baseurl+encodeURIComponent(query)+"&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys", true);
            xhttp.send();
    }