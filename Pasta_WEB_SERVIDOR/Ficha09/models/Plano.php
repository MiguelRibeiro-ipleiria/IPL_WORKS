<?php
use Carbon\Carbon;
class Plano {

    function calculaplano($credito, $numPrest, $data)
    {
        $prestacao = $credito / $numPrest;
        $divida = $credito;

        $array_dados = [];

        for ($i = 0; $i < $numPrest; $i++) {
            $array_dados[] = [
                'data' => $data->format('d/m/Y'),
                'prestacao' => number_format($prestacao, 2, ',', '.'), // Formata o valor da prestação.
                'divida' => number_format($divida, 2, ',', '.') // Formata o valor da dívida restante.
            ];

            $divida -= $prestacao;

            $data->addMonth();
        }

        return $array_dados;
    }

}

?>