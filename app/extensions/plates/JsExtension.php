<?php
/**
* Auteur: LAHAYE Olivier
*
*/

namespace extensions\plates;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class JsExtension implements ExtensionInterface
{
    protected $scripts;
    private $_registered = false;
    
    public function register(Engine $engine)
    {
        if($this->_registered) return;
        
        $this->scripts = [];
        $engine->registerFunction('js', [$this, 'getInstance']);
        
        $_registered = true;
    }
    
    public function getInstance(){
        return $this;
    }
    
    public function add($name, $url, $depedencies = null)
	{
		if(!array_key_exists($name, $this->scripts))
		{
			$this->scripts[$name] = [
				"url" => $url,
				"depedencies" => $depedencies
			];
		}
        
		return $this;
	}
    
    public function render()
	{
		return $this->reorder($this->scripts, key($this->scripts));
	}
	
	protected function reorder(&$scripts, $key = null, $isDependency = false, &$htmlString = "")
	{
		if(empty($key)) return $htmlString;
		
		$script = $scripts[$key];
		$deps = $script["depedencies"];
		unset($scripts[$key]);
		
		if($deps !== null)
		{
			while($dep = array_shift($deps))
			{
				if(array_key_exists($dep, $scripts)){	
					$this->reorder($scripts, $dep, true, $htmlString);
				}
			}
		}
		
		$this->renderScriptHandler($script, $htmlString);
		if(!$isDependency) return $this->reorder($scripts, key($scripts), false, $htmlString);
	}
	
	protected function renderScriptHandler($script, &$htmlString){
		$htmlString.="<script type='text/javascript' src='".$script["url"]."'></script>"."\r\n";
	}
}

?>