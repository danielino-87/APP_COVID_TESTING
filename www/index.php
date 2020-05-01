<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<style>
#my_map{ width:600px;
height:600px;
margin:0 auto
}
</style>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.js" type ="text/javascript"></script>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
</head>

<script>
//immagazzinamento coords per input.php
if (navigator.geolocation) {

navigator.geolocation.getCurrentPosition(function(position) {

    $.ajax({
        url:'input.php',
        data: {
            'lat': position.coords.latitude,
            'lng': position.coords.longitude
        },
        type: 'get',
        success: function (result) {
            // If your backend page sends something back
            alert(result);
        }
    });

  });
}
</script>

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
</body>



</html>