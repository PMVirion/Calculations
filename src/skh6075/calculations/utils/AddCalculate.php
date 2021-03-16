<?php

namespace skh6075\calculations\utils;

use skh6075\calculations\Calculate;
use skh6075\calculations\CalculatePriority;

final class AddCalculate extends Calculate{

    public function __construct(array $numeric) {
        parent::__construct(CalculatePriority::MONITOR, $numeric);
    }

    protected function onCalculate(array $numeric): void{
        $result = 0;
        foreach ($numeric as $value)
            $result += $value;

        $this->setResult($result);
    }
}