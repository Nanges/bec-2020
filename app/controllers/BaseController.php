<?php 
/**
* Auteur: LAHAYE Olivier
*
*/
namespace Controllers;

use Controllers\Interfaces\MvcControllerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Interop\Container\ContainerInterface;

abstract class BaseController implements MvcControllerInterface
{
    protected $di;
    protected $request;
    protected $response;
    
    function __construct(ContainerInterface $di){
        $this->di = $di;
    }
    
    function setRequestResponse(ServerRequestInterface $request, ResponseInterface $response){
        $this->request = $request;
        $this->response = $response;
        $this->di["viewExtensions"]->setRequest($request);
    }
    
    //http://www.slimframework.com/docs/objects/response.html#returning-json
    function json($obj, $code = 200){
        return $this->response->withJson($obj, $code);
    }
    
    function view($params = [], $path = null){

        if(is_null($path)){
            $trace = debug_backtrace()[1];
            $path = $this->resolveViewPath($trace["function"], $trace["class"]);
        }

        $params['__request'] = $this->request;
        $this->response->write($this->di["template"]->render($path, $params));

        return $this->response;
    }

    function redirect($routeName, $args = []){
        $path = $this->di['router']->pathFor($routeName, $args);
        return $this->response->withRedirect($path, 301);
    }
    
    protected function resolveViewPath($fn, $className){
        $shortClassName = substr($className, strrpos($className, '\\') +1);
        $folder = substr($shortClassName, 0, strrpos($shortClassName, "Controller"));
        
        return strtolower("/$folder/$fn");
    }
}

?>