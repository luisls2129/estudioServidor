<?php
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $basedir = '/estudioServidor/practica4.1';
    $r->addRoute('GET', $basedir . '/', 'main@mundo');
    $r->addRoute('GET', $basedir . '/universo', 'main@universo');
});
// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        $controllerName = 'Main';
        $action = 'error';
        include('./controllers/' . $controllerName . '.php');
        $controller = new $controllerName();
        $controller->$action();
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $partes = explode('@', $handler);
        $controllerName = '\\controllers\\'.ucfirst($partes[0]);
        $action = $partes[1];
        $controller = new $controllerName();
        $controller->$action();
        break;
}
