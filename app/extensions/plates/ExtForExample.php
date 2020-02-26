<?php 
/**
* Auteur: LAHAYE Olivier
*
*/
namespace extensions\plates;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;
use Slim\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;

class ExtForExample implements ExtensionInterface
{
    protected $di;
    protected $currentRequest;
    protected $engine;
    
    function __construct(Container $di){
        $this->di = $di;
    }
    
    public function register(Engine $engine)
    {
        $this->engine = $engine;
        
        $engine->registerFunction('pathFor', [$this, 'pathFor']);
        $engine->registerFunction('linkFor', [$this, 'linkFor']);
        $engine->registerFunction('base', [$this, 'basePath']);
        $engine->registerFunction('datepicker', [$this, 'datepicker']);
        $engine->registerFunction('navItem', [$this, 'navItem']);
    }
    
    public function setRequest($request){
        $this->currentRequest = $request;
    }

    public function basePath(){
        return $this->currentRequest
                ->getUri()
                ->getBasePath();
    }
    
    public function pathFor($routeName, $params = []){
        return $this->di->get("router")->pathFor($routeName, $params);
    }

    public function navItem($text, $routeName, $params = []){

        $cssClass = "";
        $route = $this->currentRequest->getAttribute('route');

        if($route !== null){
            if($route->getName() === $routeName){
                $cssClass = 'active';
            }
        }
        
        $href = $this->pathFor($routeName, $params);
        // return "<li class='nav-item $cssClass'><a href='$href' class='nav-link'>$text</a></li>";
        return "<li class='$cssClass'><a href='$href'>$text</a></li>";
    }
    
    public function linkFor($linkText, $routeName, $params = [], $className = null, $blank = false){
        $href = $this->pathFor($routeName, $params);
        $class = is_null($className) ? "" : "class=\"$className\"";
        $blankAttr = $blank ? 'target="_blank"' : "";
        
        return "<a href=\"$href\" $class $blankAttr>$linkText</a>";
    }
    
    public function datepicker($name = "", $value = "")
    {
        return $this->engine->render("/extensions/form/datepicker", [
            "name" => $name,
            "value" => $value
        ]);
    }
}

?>