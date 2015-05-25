<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mulheres Tatuadas - Tatuagem perto de você!</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="http://www.mulherestatuadas.com.br/portal/wp-content/themes/estesso-theme/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="http://sempipoca.com/MT/wp-content/themes/estesso-theme/css/bebas/stylesheet.css" type="text/css" />
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="gmaps.js"></script>
  <style>
  body{margin:0px;background:url('image/body-bg.jpg') repeat;}
  #content{background:url('image/shadow.png') repeat-x;width:100%;padding-top:10px;}
  #map{width:100%;min-height:400px;margin:0px;} 
  #logo{padding:10px; float:left;}
  #geocoding_form{width:30%;padding:10px; font-size:16px; margin-right:20px;float:right;color:#1d1d1d;font-family: bebas_neueregular;text-shadow: rgba(0, 0, 0, 0.20) 0 1px 0;}
  #geocoding_form input{width:100%;border:1px solid #1d1d1d;}
  #geocoding_form .btn{width:30%;border:1px solid #1d1d1d;background:#e20040;color:#FFF;float:right;font-family: bebas_neueregular;letter-spacing: 4px;}
  .clear{clear:both;}
  </style>
  
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
		$("#map").css("height",$(window).height()*0.82);
		var map = new GMaps({
		zoom: 9,
        el: '#map',
        lat: -23.444979,
        lng: -46.453629
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        }
      });
		map.addMarker({
			lat: -23.444979,
			lng: -46.453629,
			icon: "image/ico-red.png",
			infoWindow: {
				content: '<div><div style="float:left;"><img src="image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
			}
		});
		map.addMarker({
			lat: -23.710765,
			lng: -46.422696,
			title: 'Para você...',
			icon: "image/ico-red.png",
			infoWindow: {
				content: '<div><div style="float:left;"><img src="image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
			}
		});
		
		map.addMarker({
			lat: -23.682804,
			lng: -46.595546,
			title: 'Para você...',
			icon: "image/ico-red-plus.png",
			infoWindow: {
				content: '<div><div style="float:left;"><img src="image/studio.jpg" width=200/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
			}
		});
		$('#geocoding_form').submit(function(e){
			e.preventDefault();
			GMaps.geocode({
			  address: $('#address').val().trim(),
			  callback: function(results, status){
				if(status=='OK'){
				  var latlng = results[0].geometry.location;
				  map.setCenter(latlng.lat(), latlng.lng());
				}
			  }
			});
		});
    });
  </script>
</head>
<body>
	<div id="map"></div>
	<div id="content">
		<div id="logo"><img src="image/logo.png" /></div>
		<form method="post" id="geocoding_form">
			<label for="address">Endereço:</label>
			<div class="input">
			  <input type="text" id="address" name="address" />
			  <input type="submit" class="btn" value="Buscar" />
			  <div class="clear"></div>
			</div>
		</form>
		<div class="clear"></div>
	</div>
	<!--
							map.addMarker({
							lat: -23.682804,
							lng: -46.595546,
							title: 'Para você...',
							infoWindow: {
								content: '<p>Teste 2</p>'
							}
						});
	-->
</body>
</html>