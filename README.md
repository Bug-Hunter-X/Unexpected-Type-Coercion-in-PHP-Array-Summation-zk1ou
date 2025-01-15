# PHP Type Coercion Bug

This repository demonstrates a subtle bug in PHP related to type coercion when working with arrays of strings that are implicitly converted to integers within a function expecting an array of integers.

The `bug.php` file shows the problem: the function `calculateSum` unintentionally adds string values as numbers, leading to incorrect results when the input array contains strings instead of integers.  The `bugSolution.php` offers a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output for the array containing string values.