# Calculations
[virion] Calculator library for developers

# How Use?

```php
CalculateFactory::onRun(...);
```

> The correct answer of all calculations is stored in the property result value contained in the operator of the class related to Calculate.

```php
$result = CalculateFactory::onRun(
    new AddCalculate([5, 5]),      //result: 10
    new SubtractCalculate([3, 2]), //result: 1
    new DivideCalculate([5, 5]),   //result: 1
    new MultiplyCalculate([2, 5]), //result: 10
);
var_dump($result === 22); //result: true
```
