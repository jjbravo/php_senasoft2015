<?php 
	namespace senasoftPHP\http\Views;
	use Illuminate\Http\Response;
	class View{
		private $template;
		private $params;

		public function __construct($template, array $params=[]){
			$this->template=$template;
			$this->params=$params;
		}

		public function render(){
			$content = $this->loadTemplate();
			$response= new response($content);

			return $response;
		}

		private function loadTemplate(){
		$path=dirname(dirname(dirname(__DIR__))).'/resources/Views';
		//echo $path;
		$templatePath="$path/{$this->template}.php";
		return $this->includeTemplateFromFile($templatePath,$this->params);
		}
		private function includeTemplateFromFile($path, $params){
			if(file_exists($path)){
				extract($params);
				// var_dump($params);
				ob_start();
				require $path;
				return ob_get_clean();

			}

		}
	}

 ?>