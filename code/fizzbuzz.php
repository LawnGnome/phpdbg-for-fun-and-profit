<?php

function fizzbuzz($n) {
  if (0 == ($n % 15)) {
    return 'FizzBuzz';
  } elseif (0 == ($n % 5)) {
    return 'Buzz';
  } elseif (0 == ($n % 3)) {
    return 'Fizz';
  }
  return (string) $n;
}

foreach (range(1, (int) $_SERVER['argv'][1]) as $n) {
  echo fizzbuzz($n).' ';
}
echo "\n";
