<?php
/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Extensions\Slim\Handlers\Strategies;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\InvocationStrategyInterface;
use Controllers\Interfaces\MvcControllerInterface;

/**
 * Default route callback strategy with route parameters as an array of arguments.
 */
class MvcRequestResponse implements InvocationStrategyInterface
{
    protected $useArg;
    
    function __construct($useArg = true){
        $this->useArg = $useArg;
    }
    
    /**
     * Invoke a route callable with request, response, and all route parameters
     * as an array of arguments.
     *
     * @param array|callable         $callable
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     * @param array                  $routeArguments
     *
     * @return mixed
     */
    public function __invoke(
        callable $callable,
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $routeArguments
    ) {
        /**
        * Si le controller est une instance de MvcController
        */

        if(is_array($callable)){
            $instance = $callable[0];
            if($instance instanceof MvcControllerInterface){

                $instance->setRequestResponse($request, $response);
                
                return $this->useArg
                    ? call_user_func_array($callable, $routeArguments)
                    : call_user_func($callable, $routeArguments);
            }
        
            if($this->useArg){
                array_unshift($routeArguments, $request, $response);
                return call_user_func_array($callable, $routeArguments);
            }
        }

        //Utilise le comportement par défaut
        foreach ($routeArguments as $k => $v) {
            $request = $request->withAttribute($k, $v);
        }
         
        return call_user_func($callable, $request, $response, $routeArguments);
    }
}
