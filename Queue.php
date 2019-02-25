<?php

require_once __DIR__.'/Structure.php';
class Queue extends Structure
{
    private $head = 0;
    private $tail = 0;
    private $count =0;

    public function in($value)
    {
        $this->storage[$this->tail++] = $value;
        $this->count++;
    }

    public function isEmpty()
    {
        return $this->head === $this->tail;
    }

    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Queue is empty");
        }

        $res = $this->storage[$this->head++];

        if($this->head > $this->tail) {
            $this->head = $this->tail = 0;
        }

        $this->count--;
        return $res;
    }

    public function size ()
    {
        return $this->count;
    }
}
