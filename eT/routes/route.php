<?php
	$app->get('/',function($request,$response){
			return 'ROOT';
		});
	$app->get('/home',function($request,$response){
			return $this->view->render($response,'home.twig');
		});
?>