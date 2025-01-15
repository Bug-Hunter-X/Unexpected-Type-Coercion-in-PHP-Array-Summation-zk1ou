```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = ['1','2','3'];
echo calculateSum($numbers); //Output: 6 (This is unexpected and wrong!) 
```