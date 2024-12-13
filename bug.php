function myFunction() {
  // This function demonstrates an uncommon PHP bug related to incorrect usage of the ternary operator.
  $value = null;
  $result = $value ? 'Value is set' : 'Value is null';
  return $result;
}

//The above will always return 'Value is null' even if $value is assigned a non-empty string
//Because a null value is considered empty and thus false in the context of ternary operator.
//This unexpected behaviour may lead to incorrect logic and data handling.