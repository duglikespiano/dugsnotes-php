<?php

function example()
{
  echo "Expample called!";
  return true;
}

var_dump(true && true);
var_dump(false && true);
var_dump(false && example());
var_dump(true && example());
