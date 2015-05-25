<div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div>

<script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/bootstrap/bootstrap.min.js"></script>
<script src="assets/lib/jquery/jquery.cycle2.js"></script>
<script src="http://malsup.github.io/min/jquery.cycle2.carousel.min.js"></script>
<script src="assets/lib/jquery/pinterest_grid.js"></script>
<script src="http://silvestreh.github.io/onScreen/lib/jquery.onscreen.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery-image-loader.js"></script>

<script>
<?php
/*
$(document).ready(function() {

	  window.fbAsyncInit = function() {
        FB.init({
          appId      : '941231539260891',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
	   
	   
	$(".likess").click(function(){
		name = $('title').text();
		description = $(this).parents('article').find("h1").text();
		link = $(this).parents('article').find(".seeOnFacebook").attr('href');
		image = $(this).parents('article').find("img").attr('src');
		 FB.ui({
			 method: 'share_open_graph',
			 action_type: 'og.likes',
			 action_properties: JSON.stringify({
			  object: link
			 })
		}, function(response){});
		
	})
	
});
*/
?>

$(".photoMosaic").after("<div style='width:100%; color:#000; font-size:30px; position:relative; z-inde:9999; margin-top:50px;' class='carregarMais'>Carregar Mais</div>'");


$('#demo').loadImages({
  imgLoadedClb: function(){}, // Triggered when an image is loaded. ('this' is the loaded image)
  allLoadedClb: function(){}, // Triggered when all images are loaded. ('this' is the wrapper in which all images are loaded, or the image if you ran it on one image)
  imgErrorClb:  function(){}, // Triggered when the image gives an error. Useful when you want to add a placeholder instead or remove it. ('this' is the loaded image)
  noImgClb:     function(){}, // Triggered when there are no image found with data-src attributes, or when all images give an error. ('this' is the wrapper in which all images are loaded, or the image if you ran it on one image)
  dataAttr:     'src' // The data attribute that contains the source. Default 'src'.
});



$(".carregarMais").click(function(){
	$.ajax({
		url: "http://<?php echo $baseUrl ?>app/fb_api.php?until=" + $("article:last .hideFotoDesc .seeOnFacebook").attr("data-timestamp")
	}).done(function(data){
		posts = jQuery.parseJSON( data );
		$(posts.data).each(function(a, post) {
			htm = "";
			if (post.type == 'photo') {
				if (post.full_picture != '') {
					htm = '<article class="white-panel" style="opacity:1 !important;">';
						htm = htm + '<img src="' + post.full_picture + '" alt="">';
						htm = htm + '<div class="containerCircles">';
							htm = htm + '<div class="circle circle-border">';
								htm = htm + '<div class="circle-inner">';
									htm = htm + '<i class="glyphicon glyphicon-thumbs-up"></i>';
									htm = htm + '<div class="score-text likess">';
										htm = htm + '<div class="score-text likess">';
											htm = htm + post.likes.summary.total_count;
										htm = htm + '</div>';
									htm = htm + '</div>';
								htm = htm + '</div>';
							htm = htm + '</div>';
						htm = htm + '</div>';
						htm = htm + '<div class="hideFotoDesc">';
							htm = htm + '<h1>';
								htm = htm + '<a target="_blank" data-comments="' + post.comments.summary.total_count + '" data-likes="' + post.likes.summary.total_count +'" class="linkPost">';
									if (post.message != '') {
										htm = htm + post.message;
									}
								htm = htm + '</a>'
							htm = htm + '</h1>'
							htm = htm + '<a data-timestamp="'+  Date.parse(post.created_time) + '" data-id="' + post.id + '" href="' + post.link +'" class="seeOnFacebook intent">Ver no Facebook</a>';
						htm = htm + '</div>';
					htm = htm + '</article>';
				}
				console.log(htm);
				$("#demo").append(htm);
			}
		})
		
	})
})


</script>