<?php

namespace skh6075\calculations;

final class CalculateFactory{

    public static function onRun(Calculate ...$calculates): int{
        $result = 0;
        $temp = [];
        /**
         * 계산 프로리티값이 먼저 계산을 원하면 즉시 처리함
         * 즉시 처리값이 아닌 계산 연산자는 temp배열에 기록하고 넘어감
         */
        foreach ($calculates as $calculate) {
            if ($calculate->getPriority() !== CalculatePriority::LOWEST) {
                $temp[] = $calculate;
                continue;
            }

            $result += $calculate->getResult();
        }

        /** 곱셈, 나눗셈을 제외한 나머지 연산은 계산이 끝난 후에 처리함 */
        foreach ($temp as $value) {
            $result += $value->getResult();
        }

        return $result;
    }
}