<?php 
	namespace senasoftPHP\http\Controllers;
	use Illuminate\Http\Request;
	use senasoftPHP\http\Views\View;
	use senasoftPHP\Empleado;
	use senasoftPHP\HiperVinculos;
	use senasoftPHP\CabeceraPagina;
	use senasoftPHP\Menu;
	class HomeControllers{
		public function index(Request $request){

	$empleado=new Empleado('Jhon Jairo Bravo C',2200);
	$hiperVinculos=new HiperVinculos(['inicio'=>'Inicio',
		'contacto'=>'Contacto',
		'noticias'=>'Noticias',
		'quienes'=>'Quienes Somos',
		'blog'=>'Blog']);

	$cabecera=new CabeceraPagina('Bienvenidos','center','rojo','background_green');
	$menu=new  Menu(3);
	 // echo $empleado->getImpuesto()."\n";

			$view=new View('home',['message'=>$empleado->getMensaje(),
				'nombre'=>$empleado->getNombre(),
				'sueldo'=>$empleado->getSueldo(),
				'vinculos'=>$hiperVinculos->getHiperVinculos(),
				'titulo'=>$cabecera->getTitulo(),
				'align'=>$cabecera->getAlign(),
				'color'=>$cabecera->getColor(),
				'background_color'=>$cabecera->getBackgroundColor(),
				'num_options'=>$menu->getNumOptions()
				]);
			// $empleado=new Empleado(['nombre'=>'Jhon Jairo Bravo C','sueldo'=>3200]);

			$response=$view->render();
			// $response=$empleado->render();
			$response->send();
			
		}

		
	}

 ?>