```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += (int)$number; //Explicit type casting
    } else {
      // Handle non-numeric values appropriately
      trigger_error('Non-numeric value encountered in the array');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = ['1','2','3'];
echo calculateSum($numbers); //Output: 6

$numbers = ['1','2','a'];
echo calculateSum($numbers); // Output: Warning and 3
```