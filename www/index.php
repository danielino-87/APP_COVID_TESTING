<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<style>
#mappa{
width: 600px;
height: 550px;
}
</style>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
function get_position(position)
{
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
	 alert(typeof latitude +' '+typeof longitude)
	 alert('latitudine: '+latitude+' longitudine: '+longitude)
    var miaPosizione = new google.maps.LatLng(latitude,longitude);

    var settings = {
    zoom: 15,
    center: miaPosizione,
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP};

    var map = new google.maps.Map(document.getElementById("mappa"), settings);

    marker = new google.maps.Marker({
    position: miaPosizione,
    map: map,
    title: "La tua posizione"
     });
    
     }
    
     if(navigator.geolocation)
     {
    
         navigator.geolocation.getCurrentPosition(get_position,get_error,{'enableHighAccuracy':true,'timeout':30000,'maximumAge':0});
    
     }
     else
     {
         alert('Il browser non supporta la geolocalizzazione');
     }
 
function get_error(error)
{
    if(error.code == 1)
    {
        alert("Non hai autorizzato la geolocalizzazione");
    }
    else if(error.code == 2)
    {
        alert("La posizione non disponibile");
    }
    else if(error.code == 3)
    {
        alert("il timeout é scaduto");
    }
    else
    {
        // debug
        alert("messaggio di errore: "+error.message);
    }
}
 
</script>


</head>


<head>
<title>PAGINA CARICAMENTO DATI</title>
</head>
<body>
<table border="0">
  <tr>
    <td align="center">Se sei positivo al COVID per favore invia la segnalazione</td>
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="input.php">
        <tr>
          <td>Nome</td>
          <td><input type="text" name="name" size="20">
          </td>
        </tr>
        <tr>
          <td>Cognome</td>
          <td><input type="text" name="cognome" size="40">
          </td>
        </tr>
        <tr>
		  <td>Età</td>
		  <td><input type="text" name="età" size="40">
		  </td>
		</tr>
		<tr>
		<tr>
		  <td>Sesso</td>
		  <td><input type="text" name="sesso" size="40">
		  </td>
		</tr>
		<tr>
		<tr>
		  <td>Località</td>
		  <td><input type="text" name="località" size="40">
		  </td>
		</tr>
		<tr>
		
		
		
		
		
          <td></td>
          <td align="right"><input type="submit" 
          name="submit" value="Sent"></td>
        </tr>
        </form>
        </table>
      </td>
    </tr>
</table>



<body>
 <div id="mappa"></div>
</body>

</html>