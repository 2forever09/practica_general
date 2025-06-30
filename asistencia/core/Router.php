<?php
class Router {
    public function route() {
        $controller = $_GET['controller'] ?? 'asistencia';
        $action = $_GET['action'] ?? 'index';

        $controllerName = ucfirst($controller) . 'Controller';
        $controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerObject = new $controllerName();

            if (method_exists($controllerObject, $action)) {
                $controllerObject->$action();
            } else {
                echo "Method $action not found.";
            }
        } else {
            echo "Controller $controllerName not found.";
        }
    }
}
