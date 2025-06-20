<?php
use Carbon\Carbon;

class Controller
{
    public function __construct()
    {

    }

    protected function redirectToRoute($controllerPrefix, $action, $params = [])
    {
        // Build the redirect URL
        $url = 'index.php?c=' . urlencode($controllerPrefix) . '&a=' .
            urlencode($action);
        foreach ($params as $key => $value) {
            $url .= '&' . urlencode($key) . '=' . urlencode($value);
        }

        // Redirect to the URL
        header('Location: ' . $url);

    }

    protected function renderView($controllerPrefix, $viewName, $data = [], $layout = 'default') {
        extract($data);
        $viewPath = 'views/' . $controllerPrefix . '/' . $viewName . '.php';
        $layoutPath = 'views/Layout/' . $layout . '.php';
        require_once($layoutPath);
    }

    // Obter o valor para uma determinada chave (parâmetro POST)
    protected function getHTTPPostParam($key) {
        return $_POST[$key] ?? '';
    }

// Obter o valor para uma determinada chave (parâmetro GET)
    protected function getHTTPGetParam($key) {
        return $_GET[$key] ?? '';
    }

// Obter o vetor POST
    protected function getHTTPPost() {
        return $_POST;
    }

// Verificar se o parâmetro existe através de uma determinada chave [POST]
    protected function hasHTTPPostParam($key) {
        return isset($_POST[$key]);
    }

// Verificar se o parâmetro existe através de uma determinada chave [GET]
    protected function hasHTTPGetParam($key) {
        return isset($_GET[$key]);
    }

    public function authenticationFilter()
    {
        require_once 'index.php?' . INVALID_ACCESS_ROUTE;
    }
}
?>
