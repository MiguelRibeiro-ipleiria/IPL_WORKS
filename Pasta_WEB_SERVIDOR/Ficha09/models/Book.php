<?php
class Book extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('genre')
    );

    static $validates_presence_of = array(
        array('name'),
        array('isbn', 'message' => 'It must be provided')
    );

    static $has_many = array(
        array('chapters')
    );
}
