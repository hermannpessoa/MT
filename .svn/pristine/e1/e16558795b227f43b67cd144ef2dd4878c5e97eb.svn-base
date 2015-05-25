<?php

	require_once('../facebook-feed-source/resources/facebook-php-sdk-master/src/facebook.php');
	$config = array();
    $config['appId'] = '941231539260891';
    $config['secret'] = '25e3456fae80d1a745277a42c1539a7a';
    $config['fileUpload'] = false; // optional
    $facebook = new Facebook($config);
	$until = "";
	if (@$_GET['until'] != "") {
		$until = "&until=" . ($_GET['until']);

	}
	$pagefeed = $facebook->api("/216726111724519/posts?limit=100". $until ."&fields=picture,full_picture,likes.limit(1).summary(true),comments.limit(1).summary(true),message,type,link,id");
	
	echo json_encode($pagefeed);
	
