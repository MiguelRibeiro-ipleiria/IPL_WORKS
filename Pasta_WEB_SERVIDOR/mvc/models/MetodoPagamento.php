<?php
class MetodoPagamento extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('Conta')
    );

}