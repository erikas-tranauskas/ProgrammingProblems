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

    /* Insert new node to the beginning of the list. */
    public function insertFirst($data)
    {
        $this->head = new Node($data, $this->head);
    }

    /* Get the size of the list. */
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

    /* Clear the whole list. */
    public function clear()
    {
        $this->head = null;
    }

    /* Get the last entry from the list. */
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

    /* Remove the first entry from the list. */
    public function removeFirst()
    {
        if ($this->head) {
            $this->head = $this->head->next;
        }
    }

    /* Remove the last entry from the list. */
    public function removeLast()
    {
        if ($this->head) {
            if (!$this->head->next) {
                $this->head = null;
            }

            $previous = $this->head;
            $node = $this->head->next;

            while ($node->next) {
                $previous = $node;
                $node = $node->next;
            }

            $previous->next = null;
        }
    }

    /* Push the new node into the end of the list. */
    public function insertLast($data)
    {
        $lastNode = $this->getLast();
        $newNode = new Node($data);

        if ($lastNode) {
            $lastNode->next = $newNode;
        } else {
            $this->head = $newNode;
        }
    }

    /* Get the node of the list at any index value. */
    public function getAt($data)
    {
        if ($this->head) {
            $counter = 0;
            $node = $this->head;

            while ($node) {
                if ($counter === $data) {
                    return $node;
                }

                $node = $node->next;
                $counter++;
            }
        }

        return null;
    }

    /* Remove the node of the list at any given index value. */
    public function removeAt($data)
    {
        if ($this->head) {
            if ($data === 0) {
                $this->head = $this->head->next;
            }

            $previous = $this->getAt($data - 1);
            if (!$previous || !$previous->next) {
                return false;
            }
            $previous->next = $previous->next->next;
        }

        return true;
    }

    /* Insert new node with any given data at passed index value.
       If the index is bigger than the size of the list - insert new node at the end of the list. */
    public function insertAt($insertAt, $data)
    {
        $node = new Node($data);

        if ($this->head) {
            if ($insertAt === 0) {
                $node->next = $this->head;
                $this->head = $node;
                return true;
            }

            $previous = $this->getAt($insertAt - 1);
            if (!$previous) {
                $previous = $this->getLast();
            }
            $node->next = $previous->next;
            $previous->next = $node;
        } else {
            $this->head = $node;
        }

        return true;
    }

    /* Returns the midpoint of the list.
       Get the first element of the list and iterate through the whole list
       while incrementing $first by one element and $second by two elements
       each iteration. If $second->next->next doesn't exist - it means we are at the end
       of the list and midpoint is $first. */
    public function midpoint($data)
    {
        $first = $data->getAt(0);
        $second = $data->getAt(0);

        while ($second->next && $second->next->next) {
            $first = $first->next;
            $second = $second->next->next;
        }

        return $first->data;
    }

    /* Get the n-th element of the list from the last node. */
    public function fromLast($data, $index)
    {
        $first = $data->getAt(0);
        $second = $data->getAt(0);

        while ($index > 0) {
            $second = $second->next;
            $index--;
        }

        while ($second->next) {
            $first = $first->next;
            $second = $second->next;
        }

        return $first->data;
    }
}
