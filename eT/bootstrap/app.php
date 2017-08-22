<?php
	session_start();
	require __DIR__.'/../vendor/autoload.php';
	$database = new \EmployeeTrack\Database('developer',);
	$con->connect('developer','emp_tracking');
	$sql = "SELECT * FROM et_product";
	$result = $con->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
	//echo ('connected suceesss');
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