<?php
	$baseUrl = 'mulherestatuadas.com.br/v12/';
	$pagefeed = get_remote_data("http://".$baseUrl ."app/fb_api.php");
	function get_remote_data($url, $post_paramtrs=false)    {   $c = curl_init();curl_setopt($c, CURLOPT_URL, $url);curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); if($post_paramtrs){curl_setopt($c, CURLOPT_POST,TRUE);  curl_setopt($c, CURLOPT_POSTFIELDS, "var1=bla&".$post_paramtrs );}  curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:33.0) Gecko/20100101 Firefox/33.0"); curl_setopt($c, CURLOPT_COOKIE, 'CookieName1=Value;'); curl_setopt($c, CURLOPT_MAXREDIRS, 10);  $follow_allowed= ( ini_get('open_basedir') || ini_get('safe_mode')) ? false:true;  if ($follow_allowed){curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);}curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 9);curl_setopt($c, CURLOPT_REFERER, $url);curl_setopt($c, CURLOPT_TIMEOUT, 60);curl_setopt($c, CURLOPT_AUTOREFERER, true);         curl_setopt($c, CURLOPT_ENCODING, 'gzip,deflate');$data=curl_exec($c);$status=curl_getinfo($c);curl_close($c);preg_match('/(http(|s)):\/\/(.*?)\/(.*\/|)/si',  $status['url'],$link);$data=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/|\/)).*?)(\'|\")/si','$1=$2'.$link[0].'$3$4$5', $data);$data=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/)).*?)(\'|\")/si','$1=$2'.$link[1].'://'.$link[3].'$3$4$5', $data);if($status['http_code']==200) {return $data;} elseif($status['http_code']==301 || $status['http_code']==302) { if (!$follow_allowed){if(empty($redirURL)){if(!empty($status['redirect_url'])){$redirURL=$status['redirect_url'];}}   if(empty($redirURL)){preg_match('/(Location:|URI:)(.*?)(\r|\n)/si', $data, $m);if (!empty($m[2])){ $redirURL=$m[2]; } } if(empty($redirURL)){preg_match('/href\=\"(.*?)\"(.*?)here\<\/a\>/si',$data,$m); if (!empty($m[1])){ $redirURL=$m[1]; } }   if(!empty($redirURL)){$t=debug_backtrace(); return call_user_func( $t[0]["function"], trim($redirURL), $post_paramtrs);}}} return "ERRORCODE22 with $url!!<br/>Last status codes<b/>:".json_encode($status)."<br/><br/>Last data got<br/>:$data";}
	$pagefeed = json_decode($pagefeed);
?>
<div class="photoMosaic" style="min-height: 1000px;">
    <div class="heading">
        <h2 class="bgCinza">fotos</h2>
    </div>
       <section id="demo">
			<?php
			$i = 0;
			
			foreach($pagefeed->data as $k=>$post) {
				
				if ($post->type == 'photo') {
                    if (empty($post->full_picture) === false) {    
			?>
						<article class="white-panel"> <img data-src="<?php echo $post->full_picture ?>" alt="ALT">
							<div class="containerCircles">
								<div class="circle circle-border">
								     <div class="circle-inner">
								     	<i class="glyphicon glyphicon-thumbs-up"></i>
								         <div class="score-text likess">
								            <?php echo ($post->likes->summary->total_count) ?>
								          </div>
								     </div>
								</div>
							</div>
							<div class="hideFotoDesc">
								<h1>
									<a target="_blank" data-comments="<?php echo $post->comments->summary->total_count ?>" data-likes="<?php echo ($post->likes->summary->total_count) ?>" class="linkPost">
										<?php
											if (empty($post->message) === false) {
												echo $post->message;
											}
										?>
									</a>
								</h1>
								<a data-timestamp="<?php echo strtotime($post->created_time) ?>" data-id="<?php echo $post->id ?>" href="<?php echo $post->link ?>" class="seeOnFacebook intent">Ver no Facebook</a>
							</div>
						</article>
			<?
					}
				}
					
					if ($k%10 == 0 && $k > 1) {
						?>
							<article class="white-panel"> 
								<img src="http://placehold.it/350x280">
							</article>
						<?php
					}
			}
			?>
        </section>
</div>