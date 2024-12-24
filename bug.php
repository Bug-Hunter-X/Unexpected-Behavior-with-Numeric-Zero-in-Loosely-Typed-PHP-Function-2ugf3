```php
<?php
function my_function($arg) {
  if ($arg === null) {
    return 'null'; // Handles null correctly
  } elseif (is_numeric($arg)) {
    return $arg * 2; //Handles numeric values correctly
  } else {
    return strtoupper($arg); //Handles strings correctly
  }
}

// The problematic usage
echo my_function(0);
```