<?php

	$app_id = "578241305624655";
	$app_secret = "163708fdec7503fe860750419670152a";
	$site_url = "http://www.rzchou.com";

	include_once "fb-sdk/facebook.php";

	$facebook = new Facebook(array(
		'appId'		=> $app_id,
		'secret' 	=> $app_secret,
		));

	$user = $facebook->getUser();

	if ($user){
		try{
			$user_profile = $facebook->api('/me');
		} catch (FacebookAPIException $e){
			error_log($e);
			$user = NULL;
		}
	}
	

	//if ($user){
	//$params = array('next' => $fbconfig['baseurl'].'logout.php');
	// $logoutUrl = $facebook->getLogoutUrl($params); // $params is optional.
	
		// $logoutUrl = $facebook->getLogoutUrl(array(
		// 	'next'		=> "www.rzchou.com", //URL to which to redirect the user after logging out
		// 	));
	//}
	//else {
		$loginUrl = $facebook->getLoginUrl(array(
			'scope'		=> 'read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos', //permissions to request from the user
			'redirect_uri' => $site_url.'/Home.php',
			));
	//}

	if ($user){
		//Save your method calls into an array
		$queries = array(
				array('method' => 'GET', 'relative_url' => '/'.$user),
				array('method' => 'GET', 'relative_url' => '/'.$user.'home?limit=50'),
				array('method' => 'GET', 'relative_url' => '/'.$user.'/friends'),
				array('method' => 'GET', 'relative_url' => '/'.$user.'/photos?limit=6'),
				);

		//Post your queries to the batch endpoint on the graph.
		try {
			$batchResponse = $facebook->api('?batch='.json_encode($queries), 'POST');
		} catch (Exception $o){
			error_log($o);
		}

		//Return values are indexed in order of the original array, content is in ['body'] as JSON
		//string. Decode for use as a PHP array.
		$user_info		= json_decode($batchResponse[0]['body'], TRUE);
		$feed			= json_decode($batchResponse[1]['body'], TRUE);
		$friends_list	= json_decode($batchResponse[2]['body'], TRUE);
		$photos			= json_decode($batchResponse[3]['body'], TRUE);

		// if(isset($_POST['publish'])){
		// 	try{
		// 		$publishStream = $facebook->api("/$user/feed", 'post', array(
		// 			'message'		=> 'Check out 25 labs',
		// 			'link'			=> 'http://25labs.com',
		// 			'picture'		=> 'http://25labs.com/images/25-labs-160-160.jpg',
		// 			'name'			=> '25 labs',
		// 			'caption'		=> '25labs.com',
		// 			'description'		=> 'A Technology Laboratory. Highly Recomented technology blog.',
		// 			));
		// 	}catch(FacebookApiException $e){
		// 		error_log($e);
		// 	}
		// }
	 
		// // Update user's status using graph api
		// if(isset($_POST['status'])){
		// 	try{
		// 		$statusUpdate = $facebook->api("/$user/feed", 'post', array('message'=> $_POST['status']));
		// 	}catch(FacebookApiException $e){
		// 		error_log($e);
		// 	}
		// }
	}
?>