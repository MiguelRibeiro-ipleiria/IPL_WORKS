<?php
class Conta extends ActiveRecord\Model{

    static $has_many = array(
        array('Despesas')
    );

}