<?php
use Carbon\Carbon;

class Auth
{
    public function __construct() {
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function CheckAuth($user, $pass) {
        $validUsername = "Miguel";
        $validPassword = "1234";

        if ($user === $validUsername && $pass === $validPassword) {
            $_SESSION['id'] = $user;
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $user;

            return true;
        }
        return false;
    }

    public function IsLoggedIn(){

        if(!isset($_SESSION['username'] ) )
        {
            $controller = new Controller();
            $controller -> authenticationFilter();
        }

    }

    public function Logout(){
        session_destroy();
    }
}

?>
