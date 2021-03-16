<?php

namespace skh6075\calculations;

class Calculate{

    private int $priority;

    private int $result = 0;

    public function __construct(int $priority, array $numeric) {
        $this->priority = $priority;
        $this->onCalculate($numeric);
    }

    final public function getPriority(): int{
        return $this->priority;
    }

    final public function getResult(): int{
        return $this->result;
    }

    final protected function setResult(int $result): void{
        $this->result = $result;
    }

    protected function onCalculate(array $numeric): void{}
}