<?php

/*
    Queue data structure.
    Add and remove methods.
 */

namespace App;

class Queue
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function add($data)
    {
        array_unshift($this->data, $data);
        return $this->data;
    }

    public function remove($data = array())
    {
        array_pop($this->data);
        return $this->data;
    }
}
