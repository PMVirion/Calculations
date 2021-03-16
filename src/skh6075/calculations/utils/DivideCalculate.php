<?php

namespace skh6075\calculations\utils;

use skh6075\calculations\Calculate;
use skh6075\calculations\CalculatePriority;

final class DivideCalculate extends Calculate{

    public function __construct(array $numeric){
        parent::__construct(CalculatePriority::LOWEST, $numeric);
    }

    protected function onCalculate(array $numeric): void{
        $result = array_shift($numeric);
        foreach ($numeric as $value)
            $result /= $value;

        $this->setResult($result);
    }
}