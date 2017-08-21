<?php
	session_start();
	require __DIR__.'/../vendor/autoload.php';
	die();
	$app = new \Slim\App([
		'settings' =>[
			'displayErrorDetails'=>true,
		]
	]);
	require '/../routes/route.php';
	$container = $app->getContainer();

	$container['view'] = function($container){
		$view = new \Slim\Views\Twig(__DIR__.'/../resources/views/',[
			'cache' => false,
			]);
		$view->addExtension(new \Slim\Views\TwigExtension(
			$container->router,
			$container->request->getUri()
			));
		return $view;
	}
	?>