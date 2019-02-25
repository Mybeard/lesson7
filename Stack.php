<?php
require_once __DIR__.'/Structure.php';
class Stack extends Structure
{
    private $top = 0;
    public function in($value)
    {
        $this->storage[$this->top++] = $value;
    }
    public function isEmpty() {
//        return empty($this->top);
        return $this->top === 0;
    }
    public function last() {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->storage[$this->top-1];
    }
    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->storage[--$this->top];
    }
}