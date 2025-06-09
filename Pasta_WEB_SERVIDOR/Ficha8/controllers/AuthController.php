<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';
class AuthController extends Controller{

    public function index() {
        $this->renderView('auth', 'index');
    }

    public function login()
    {

        $username = $this->getHTTPPostParam('username');
        $password = $this->getHTTPPostParam('pass');

        $auth = new Auth();

        if ($auth ->CheckAuth($username, $password) == true)
        {
            $this->renderView('Plano', 'index');
        } else
        {
            $this->renderView('auth', 'index');
        }

    }
    public function logout()
    {
        $auth = new Auth();
        $auth->Logout();

        $this->renderView('auth', 'index');

    }

}

