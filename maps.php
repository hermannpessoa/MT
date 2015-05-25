<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('includes/linksHead.php'); ?>
   <style>
   .fixed{
    position: fixed;
   }
   .loading-map{
    position: absolute;
    overflow: hidden;
    width: 100%;
    height: 100%;
    display: block;
    background: #f1f1f1 url(assets/images/loadMap.gif) center no-repeat;
    z-index: 1;
    top:0;
    left: 0;
   }
   </style>
</head>

<body>
    
    <?php include('includes/topoNav.php'); ?>
    <?/*php include('includes/header.php'); */?>

    <div class="row mapsCont">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 nopadding">
            <div class="instTopo map">
                <a href="index.php"><h1>Mulheres Tatuadas</h1></a>
            </div>
            <form method="post" id="geocoding_form">
                <div class="input clearfix">
                    <label for="address">Buscar por endereço:</label>
                  <input type="text" id="address" name="address" placeholder="Digite o endereço aqui..." />
                  <input type="submit" class="btn glyphicon glyphicon-search" value="" />
                  <div class="clear"></div>
                </div>
            </form>
            <div class="mapsPatrocinados">
                <p class="cinza">Patrocinados</p>
                <!-- Patrocinador -->
                <div class="pos1 patrocinado clearfix">
                    <div class="estudioHeader clearfix">
                        <h2>Nome do Estúdio</h2>
                        <a href="">Ver no mapa</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 fotoPatrocinado nopadding">
                        <img src="http://placehold.it/121x100" width="100%" height="100px">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 nopadding">
                        <div class="textoPatrocinado">
                            <p><i class="glyphicon glyphicon-map-marker"></i> Rua Tabapuã, 1443 - Itaim Bibi, São Paulo</p>
                            <p><i class="glyphicon glyphicon-earphone"></i> (11) 3071-3157</p>
                            <p><i class="glyphicon glyphicon-globe"></i><a href="http://www.tattooyou.com.br/">www.tattooyou.com.br</a></p>
                            <!-- <a href="">Ver no mapa</a> -->
                        </div>
                    </div>
                </div>
                <!-- Patrocinador -->
                <div class="pos1 patrocinado clearfix">
                    <div class="estudioHeader clearfix">
                        <h2>Nome do Estúdio</h2>
                        <a href="">Ver no mapa</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 fotoPatrocinado nopadding">
                        <img src="http://placehold.it/121x100" width="100%" height="100px">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 nopadding">
                        <div class="textoPatrocinado">
                            <p><i class="glyphicon glyphicon-map-marker"></i> Rua Tabapuã, 1443 - Itaim Bibi, São Paulo</p>
                            <p><i class="glyphicon glyphicon-earphone"></i> (11) 3071-3157</p>
                            <p><i class="glyphicon glyphicon-globe"></i><a href="http://www.tattooyou.com.br/">www.tattooyou.com.br</a></p>
                            <!-- <a href="">Ver no mapa</a> -->
                        </div>
                    </div>
                </div>
                <!-- Patrocinador -->
                <div class="pos1 patrocinado clearfix">
                    <div class="estudioHeader clearfix">
                        <h2>Nome do Estúdio</h2>
                        <a href="">Ver no mapa</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 fotoPatrocinado nopadding">
                        <img src="http://placehold.it/121x100" width="100%" height="100px">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 nopadding">
                        <div class="textoPatrocinado">
                            <p><i class="glyphicon glyphicon-map-marker"></i> Rua Tabapuã, 1443 - Itaim Bibi, São Paulo</p>
                            <p><i class="glyphicon glyphicon-earphone"></i> (11) 3071-3157</p>
                            <p><i class="glyphicon glyphicon-globe"></i><a href="http://www.tattooyou.com.br/">www.tattooyou.com.br</a></p>
                            <!-- <a href="">Ver no mapa</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 col-md-9 col-sm-9 col-xs-9 nopadding">
            <div id="map"></div>
            <div class="loading-map"></div>
        </div>
    </div>

   <!--  <div class="homeContent">
        <div class="container">
            <div class="col-lg-12">
               <?php include('includes/photoMosaic.php'); ?>
            </div>
        </div>
    </div> -->
<?/*php include('includes/footer.php'); */?>   
<?php include('includes/scripts.php'); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="maps/gmaps.js"></script>
 
  <script type="text/javascript">
  //$(document).on('page:fetch',   function() { NProgress.start(); });
    $(window).load( function(){
        $('.loading-map').fadeOut();
    })
    var map;
    $(window).resize(function(){  $('.mapsPatrocinados').height($(window).height() - ($('#geocoding_form').offset().top + $('#geocoding_form').height()) - $('.topoHeader').height() - 23); })
    $(document).ready(function(){

        $('.loading-map').css("height",$(window).height() - $('.topoHeader').height());
        $("#map").css("height",$(window).height() - $('.topoHeader').height());
        $("#side").css("height",$(window).height());
        


            navigator.geolocation.getCurrentPosition(GetLocation);
            function GetLocation(location) {
                console.log('Lat: '+location.coords.latitude + ' // Long: '+location.coords.longitude+' // Accuracy: '+location.coords.accuracy);
            }


        $('.mapsPatrocinados').height($(window).height() - ($('#geocoding_form').offset().top + $('#geocoding_form').height()) - $('.topoHeader').height() - 23);

      GMaps.geolocate({
        success: function(position){
            map.setCenter(position.coords.latitude, position.coords.longitude);

            map.addMarker({
                lat: position.coords.latitude,
                lng: position.coords.longitude,
                icon: "maps/image/ico-red.png",
                infoWindow: {
                    content: 'Voce está aqui!'
                }
            });
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        }
      });


        var map = new GMaps({
            zoom: 15,
            el: '#map',
            lat: -23.444979,
            lng: -46.453629
        });


        map.addMarker({
            lat: -23.444979,
            lng: -46.453629,
            icon: "maps/image/ico-red.png",
            infoWindow: {
                content: '<div><div style="float:left;"><img src="maps/image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
            }
        });
        map.addMarker({
            lat: -23.710765,
            lng: -46.422696,
            title: 'Para você...',
            icon: "maps/image/ico-red.png",
            infoWindow: {
                content: '<div><div style="float:left;"><img src="maps/image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
            }
        });
        
        map.addMarker({
            lat: -23.682804,
            lng: -46.595546,
            title: 'Para você...',
            icon: "maps/image/ico-red-plus.png",
            infoWindow: {
                content: '<div><div style="float:left;"><img src="maps/image/studio.jpg"/></div><div style="float:left;margin-left:5px;width:200px;font-family: Arial, Helvetica, sans-serif;font-size:12px;"><strong>Estúdio de Teste</strong><br/><span style="color:#3E3E3E">Tel</span> 0000-0000<br/><span style="color:#3E3E3E">End.</span> Rua teste, 00 - São Paulo, SP<br/><span style="color:#3E3E3E">Site</span> <a href="http://www.mulherestatuadas.com.br" target="_blank">www.mulherestatuadas.com.br</a></div><div style="clear:both;"></div></div>'
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
</body>
</html>
