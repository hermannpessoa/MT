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
 
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
		$(".wrapper").css("height",$(window).height());
		var map = new GMaps({
		zoom: 10,
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
				content: '<div><div style="float:left;"><img src="image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
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
	<style>
	 body{margin:0px;background:url('image/body-bg.jpg') repeat;}
	#map{
		-moz-box-shadow: 3px 3px 5px #000;
		-webkit-box-shadow: 3px 3px 5px #000;
		box-shadow: 3px 3px 5px #000;
		width:450px;height:350px;border:5px solid #FFF;
		float:left;
		z-index:2;
	}
	#bg-map{
		z-index:1;
		position:absolute;
		margin-top: -20px;
		margin-left: -15px;
	}
		#logo{padding:10px; text-align:center;}
		#geocoding_form{padding:10px; font-size:16px; margin-right:20px;float:right;color:#1d1d1d;font-family: bebas_neueregular;text-shadow: rgba(0, 0, 0, 0.20) 0 1px 0;}
		#geocoding_form input{width:100%;border:1px solid #1d1d1d;}
		#geocoding_form .btn{width:30%;border:1px solid #1d1d1d;background:#e20040;color:#FFF;float:right;font-family: bebas_neueregular;letter-spacing: 4px;}
	</style>
	<div class="wrapper" style="width:980px;margin:0 auto;position:relative;">
		<div style="position:absolute;height:350px;width:960px;left:10px;top:50%;margin-top:-175px;">
			<div id="bg-map"><img src="bg-map.png" /></div>
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
		</div>
	</div>

	<!--<div id="map"></div>-->
	
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