<?php
return [
    'settings' => [
        // disable this on prod
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true
    ],
    'foundHandler' => function ($container) {
        // http://www.slimframework.com/docs/objects/router.html#route-strategies
        // mvc strategy
        return new Extensions\Slim\Handlers\Strategies\MvcRequestResponse(true);
    }
];
?>