function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2; // Create a new array to prevent unexpected side-effects
  }
  return $newArray;
}