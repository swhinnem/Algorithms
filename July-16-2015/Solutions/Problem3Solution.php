<?php

Class Node {
    public $value;
    public $next;
}

Class Stack {
    private $head;
    private $min;

    public function __construct() {
        $this->head = null;
        $this->min = null;
    }

    public function push($value) {
        $node = new Node();
        $node->next = null;
        $node->value = $value;

        if ($this->head === null) {
            $this->head = $node;
            $this->min = $node;
        } else {
            $node->next = $head;
            $this->head = $node;

            if ($node->value < $this->min->value) { // don't remember quite how $this-> syntax works with multiple levels
                $this->min = $node;
            }
        }

    }

    public function pop() {
        // get the current head value, and set head to the previous node
    }

    public function peek() {
        return $this->head;
    }

    public function get_min() {
        return $this->min;
    }
}


$stack = new Stack();
$stack->push(1);
$stack->push(5);
$stack->push(-400);

$value = $stack->pop();
$min = $stack->get_min();
