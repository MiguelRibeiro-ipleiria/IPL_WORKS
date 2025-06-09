<?php

class Despesa extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('Conta'),
        array('Categoria'),
        array('MetodoPagamento')
    );

}
