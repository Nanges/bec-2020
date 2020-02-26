<?php 
/**
* Auteur: LAHAYE Olivier
*
*/
namespace Controllers;

class ExampleController extends BaseController
{ 
    function index(){
        return $this->view();
    }
    
    function datepicker(){
        return $this->view();
    }
    
    function jsonResponse(){
        return $this->json(array("foo" => "bar"));
    }
}

?>