<?php

class Deque {
    private array $data;
    private int $head;
    private int $tail;
    private int $size;
    private int $maxSize;

    public function __construct(int $maxSize) {
        $this->data = array_fill(0, $maxSize, null);
        $this->head = 0;
        $this->tail = 0;
        $this->size = 0;
        $this->maxSize = $maxSize;
    }

    public function pushBack(mixed $value): bool {
        $this->data[$this->tail] = $value;
        $this->tail = ($this->tail + 1) % $this->maxSize;
        $this->size = min($this->size + 1, $this->maxSize);

        return true;
    }

    public function pushFront(mixed $value): bool {
        $this->head = ($this->head - 1 + $this->maxSize) % $this->maxSize;
        $this->data[$this->head] = $value;
        $this->size = min($this->size + 1, $this->maxSize);

        return true;
    }

    public function popBack(): mixed {
        if ($this->isEmpty()) {
            return false;
        }

        $tailValue = $this->data[$this->tail - 1 + $this->maxSize] % $this->maxSize;
        $this->tail = ($this->tail - 1 + $this->maxSize) % $this->maxSize;
        $this->size--;

        return $tailValue;
    }

    public function popFront(): mixed {
        if ($this->isEmpty()) {
            return false;
        }

        $headValue = $this->data[$this->head];
        $this->head = ($this->head + 1) % $this->maxSize;
        $this->size--;

        return $headValue;
    }

    private function isEmpty(): bool {
        return $this->size === 0;
    }

    private function isFull(): bool {
        return $this->size === $this->maxSize;
    }

}

$deque = new Deque(5);
$deque->pushFront(3);
$deque->pushFront(33);
$deque->pushFront(333);
$deque->pushFront(3333);
$deque->pushFront(33333);
$deque->pushFront(333333);
$deque->pushBack(4);
$deque->pushBack(44);
$deque->pushBack(444);
$deque->pushBack(4444);
$deque->pushBack(44444);
$deque->pushBack(444444);
$deque->pushFront(6);
$deque->pushFront(7);

var_dump($deque);