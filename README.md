# PHP Foreach Loop Pass-by-Reference Bug

This repository demonstrates a common pitfall in PHP related to pass-by-reference in `foreach` loops.  Modifying array elements directly within a `foreach` loop using pass-by-reference can lead to unexpected results.

## Bug Description
The `bug.php` file contains a function that demonstrates the issue.  The function intends to double the values of an array, but the way it's implemented causes the array to be modified unexpectedly.  The reference persists after the loop, leading to unintended changes to the original array.

## Solution
The `bugSolution.php` file provides a corrected version of the function, showcasing how to avoid the issue using techniques such as using `$value` without the `&` operator in the loop, or creating a copy of the array before processing.