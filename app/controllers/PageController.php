<?php

namespace Controllers;

use \Slim\Container as Container;

class PageController extends BaseController
{
	function index($input){
		if($input === ''){
			// home page
			$path = 'index';
			return $this->renderPath($path);
		}
		else {
			preg_match('/(.*)\..{0,4}$/', $input, $matches);

			//no match
			if(count($matches) < 2){
				return $this->notFound();
			}

			//no template file
			$path = $matches[1];
			if(!file_exists(__DIR__."/../views/pages/$path.php")){
				return $this->notFound();
			}
			
			//template exists
			return $this->renderPath($path);
		}
	}

	private function renderPath($path){
		$this->response->write($this->di["template"]->render("pages/$path"));
		return $this->response;
	}

	private function notFound(){
		$response = new \Slim\Http\Response(404);
		$response->write($this->di["template"]->render("pages/not_found"));
		return $response;
	}
}

?>