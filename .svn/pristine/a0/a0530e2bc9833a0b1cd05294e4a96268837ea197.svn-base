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
		$("#map").css("height",$(window).height());
		$("#side").css("height",$(window).height());
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
		float:left;
		z-index:2;
		-moz-box-shadow:    3px -5px 5px 6px #ccc;
		-webkit-box-shadow: 3px -5px 5px 6px #ccc;
		box-shadow:         3px -5px 5px 6px #ccc;
		width:75%;
		height:100%;
		float:left;
	}
	#bg-map{
		z-index:1;
		position:absolute;
		margin-top: -20px;
		margin-left: -15px;
	}
	
	#logo{
		width:100%;
		text-align:center;
		padding:30px 0px;
		border-bottom: 1px solid #e5e5e5;
	}
	#logo img{
		width:100%;
		max-width:260px;
	}
	#rodape{
		position:absolute;
		bottom:0px;
		height:45px;
		z-index:100;
		width:100%;
		border-top: 1px solid #e5e5e5;
	}
	#rodape p{
		color: #e5e5e5;
		font-size:12px;
		font-family: bebas_neueregular; 
		text-shadow: rgba(0, 0, 0, 0.20) 0 1px 0;
		letter-spacing: 4px;
		text-align:center;
	}
		#geocoding_form{
			border-top: 1px solid #FFF;
			border-bottom: 1px solid #e5e5e5;
			width:100%;
			margin:0 auto;
			padding-top:30px;
			padding-bottom:30px;
		}
		#infos{
			border-top: 1px solid #FFF;
			padding-top:30px;
			width:100%;
		}
		#geocoding_form label{
			display:block;
			font-size:16px;
			color:#1d1d1d;
			font-family: bebas_neueregular; 
			text-shadow: rgba(0, 0, 0, 0.20) 0 1px 0;
		}
		#geocoding_form .input{
			width:80%;
			margin:0 auto;
		}
		#geocoding_form .input input{
			width:96%;
			border:1px solid #1d1d1d;
			padding:3% 2%;
			_width:100%;
		}
		#geocoding_form .input .btn{
			width:30%;
			border:1px solid #1d1d1d;
			background:#e20040;
			color:#FFF;
			float:right;
			font-family: bebas_neueregular;
			letter-spacing: 4px;
			padding:3px 5px;
			font-size:16px;
		}
		.clear{clear:both;}
	</style>
	<div id="side" style="width:25%;float:left;position:relative;">
		<div id="logo"><img src="image/logo.png" /></div>
		<form method="post" id="geocoding_form">
			<div class="input">
				<label for="address">Endereço:</label>
			  <input type="text" id="address" name="address" placeholder="Busque o endereço aqui!" />
			  <input type="submit" class="btn" value="Buscar" />
			  <div class="clear"></div>
			</div>
		</form>
		<div class="clear"></div>
		<div id="infos"></div>
		<div id="rodape">
			<p>Versão 0.0.3</p>
		</div>
	</div>
	<div id="map"></div>
</body>
</html>