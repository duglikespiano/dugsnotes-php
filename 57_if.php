<?php

$age = 20;

// If statement
if ($age >= 21) {
  echo 'You are old enough to drink in the America';
}

// If-Else
if ($age >= 21) {
  echo 'You are old enough to drink in the America';
} else {
  echo 'You are NOT old enough to drink in the America';
}

// Nested if statement
if ($age >= 21) {
  echo 'You are old enough to drink and vote in the America';
} else {
  if ($age >= 18) {
    echo 'You are old enough to vote in the America';
  } else {
    echo 'You are NOT old enough to drink or vote in the America';
  }
}

echo '<br>';

// If-Else-If
if ($age >= 21) {
  echo 'You are old enough to drink and vote in the America';
} else if ($age >= 18) {
  echo 'You are old enough to vote in the America';
} else {
  echo 'You are NOT old enough to drink or vote in the America';
}
