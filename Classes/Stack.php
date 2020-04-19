<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $element);
        } else {
            throw new RuntimeException('Full Stack');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('Empty Stack');
        } else {
            return array_shift($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

}