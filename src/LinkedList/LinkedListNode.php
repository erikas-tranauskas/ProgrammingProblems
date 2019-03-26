<?php

/*
    Linked list data structure.
    Node class.
 */

namespace App\LinkedList;

class Node
{
    public $data;
    public $next;

    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
