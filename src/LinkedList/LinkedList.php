<?php

/*
    Linked list data structure.
    Various methods.
 */

namespace App\LinkedList;

class LinkedList
{
    public $head;

    public function __construct()
    {
        require_once 'LinkedListNode.php';
        $this->head = null;
    }

    public function insertFirst($data)
    {
        $this->head = new Node($data, $this->head);
    }

    public function getSize()
    {
        $counter = 0;
        $node = $this->head;

        while ($node) {
            $counter++;
            $node = $node->next;
        }

        return $counter;
    }

    public function clear()
    {
        $this->head = null;
    }

    public function getLast()
    {
        if (!$this->head) {
            return null;
        }

        $node = $this->head;

        while ($node) {
            if (!$node->next) {
                return $node;
            }
            $node = $node->next;
        }

        return null;
    }

    public function removeFirst()
    {
        if ($this->head) {
            $this->head = $this->head->next;
        }
    }
}
