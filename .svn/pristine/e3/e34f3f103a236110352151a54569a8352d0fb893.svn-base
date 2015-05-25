// (function () {

//     // tries to execute the uri:scheme
//     function goToUri(uri, href) {
//         var start, end, elapsed;

//         // start a timer
//         start = new Date().getTime();

//         // attempt to redirect to the uri:scheme
//         // the lovely thing about javascript is that it's single threadded.
//         // if this WORKS, it'll stutter for a split second, causing the timer to be off
//         document.location = uri;

//         // end timer
//         end = new Date().getTime();

//         elapsed = (end - start);

//         // if there's no elapsed time, then the scheme didn't fire, and we head to the url.
//         if (elapsed < 1) {
//             document.location = href;
//         }
//     }

//     $('a.intent').on('click', function (event) {
//         goToUri($(this).data('scheme'), $(this).attr('href'));
//         event.preventDefault();
//     });
// })();

$(function(){

       		if( navigator.userAgent.match(/Android/i)
			 || navigator.userAgent.match(/webOS/i)
			 || navigator.userAgent.match(/iPhone/i)
			 || navigator.userAgent.match(/iPad/i)
			 || navigator.userAgent.match(/iPod/i)
			 || navigator.userAgent.match(/BlackBerry/i)
			 || navigator.userAgent.match(/Windows Phone/i)
			 ){

			 	$('.seeOnFacebook').click(function(){
			 		// alert('fb://posts/' + $(this).attr('data-id'))
			 		//window.location = $(this).attr('href').replace("https://www.facebook.com/","fb://pages/");
			 		window.location = 'fb://post/' + $(this).attr('data-id')
			 		return false;
			 	})
			  }
			 else {
			 	//https://www.facebook.com/mulherestatuadas/photos/a.381978395199289.88625.216726111724519/911044938959296/?type=1
			 	ehmob = 0
			  }
		  
	$('.magnifier').hover(function(){
		$('.sliderEventos').cycle('pause');
		$('.sliderEventos img').each(function(a,b){
			if($(b).attr('style').indexOf('visible') > -1){
				dataEvento 	= 	$(b).attr('data-cycleData');
				localEvento = 	$(b).attr('data-cycleLocal');
				linkEvento 	= 	$(b).attr('data-cycleLink');
				//console.log(b +' // '+ dataEvento +' // '+ localEvento)
				$(this).parents('.magnifier').find('#adv-custom-caption2').append('<div class="containerDadosEvento"><p class="">Data: '+dataEvento+'</p><p class="">Local: '+localEvento+'</p><a href='+linkEvento+' class="vmEvent">Ver mais detalhes</a></div>');
				$('.containerDadosEvento').slideDown(200);
			}
		});
	},function(){
		$('.containerDadosEvento').slideUp(200, function() { $(this).remove(); });
		$('.sliderEventos').cycle('resume');
	});
	var xx = 0;
	$(".materialCont").parent().each(function(a,b){
		if (xx < $(b).height()){
			xx = $(b).height();
		}
		$(".materialCont").parent().css("height",xx + 15);
	})

	$('.fotosDestaquesHome').hover(function(){
		$('.socialShare', this).stop(true, false).animate({
			bottom: '10%',
			opacity:1
		});
	},function(){
		$('.socialShare', this).stop(true, false).animate({
			bottom: '-20px',
			opacity:0
		});
	});

	$('.like').click(function(){
		$(this).css({
			'color':'transparent',
			'background-position':'center',
		});
		return false;
	});

$('#demo').pinterest_grid({
	no_columns: 3,
	padding_x: 10,
	padding_y: 10,
	margin_bottom: 50,
	single_column_breakpoint: 700
});
$('.white-panel').hover(function(){
	target = $(this)
	$('.hideFotoDesc', this).stop(true, false).slideDown(200);
		// $('html,body').animate({
  //         scrollTop: target.offset().top
  //       }, 1000);
},function(){
	$('.hideFotoDesc', this).stop(true, false).slideUp(200);
})

$('article.white-panel').onScreen({
  tolerance: 100,
  toggleClass: false,
  doIn: function() {
  	$(this).stop(true,true).animate({opacity:1},300)
  }//,
  // doOut: function(){
  // 	$(this).stop(true,true).animate({opacity:0},500)
  // }
});

// $(window).scroll(function(){
// 	$('html,body').stop(true, false)
// })

	//REMOVE POPUP HOSPEDAGEM
	$('.bModal, .popup').remove();
});

