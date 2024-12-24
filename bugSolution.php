```php
<?php
function my_function($arg) {
  if ($arg === null) {
    return 'null';
  } elseif (is_numeric($arg)) {
    if ($arg === 0) { 
      return 'zero'; //Explicitly handle zero
    } else {
      return $arg * 2;
    }
  } else {
    return strtoupper($arg);
  }
}

echo my_function(0); // Outputs 'zero'
```