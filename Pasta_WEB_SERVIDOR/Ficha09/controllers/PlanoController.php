<?php
use Carbon\Carbon;
require_once "vendor/autoload.php";
require_once 'models/Plano.php';
class PlanoController extends Controller{
    public function __construct()
    {
        $auth = new Auth();

        $auth->isLoggedIn();
    }

    public function index() {
        $this->renderView('Plano', 'index');
    }

    public function calcular()
    {
        $plano = new Plano();


        $credito = $this->getHTTPPostParam('credito');
        $numPrest = $this->getHTTPPostParam('prest');

        $data = Carbon::now();
        $planoprestacao = $plano->calculaplano($credito, $numPrest, $data);
        $mostrarFormulario = false;
        require_once 'views/Plano/vistaplano.php';
        $this->renderView('Layout', 'default');

    }

}

