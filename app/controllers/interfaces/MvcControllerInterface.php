<?php 

namespace Controllers\Interfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface MvcControllerInterface
{
    function setRequestResponse(ServerRequestInterface $request, ResponseInterface $response);
}

?>