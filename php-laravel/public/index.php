<?php 
	require_once  'vendor/autoload.php';
	
	//use senasoftPHP\Empleado;
	use senasoftPHP\HiperVinculos;
	use senasoftPHP\http\Controllers\HomeControllers;


	use Illuminate\Http\Request;
	$require=  Request::capture(); //Metodo estatico
	$controllers = new HomeControllers($require);
	$controllers->index($require);
	
	
	


 ?>















