<?php

/*
    Stack data structure.
    Add and remove methods.
 */

namespace App;

class Stack
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function add($data)
    {
        array_push($this->data, $data);
        return $this->data;
    }

    public function remove($data = array())
    {
        array_pop($this->data);
        return $this->data;
    }
}
