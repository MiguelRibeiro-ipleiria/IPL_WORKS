<?php
class Categoria extends ActiveRecord\Model
{
    static $has_many = array(
        array('despesas')
    );

}