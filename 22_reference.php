<?php

$cup = 'empty';
function fillCup(&$cupParam)
{
  $cupParam = 'filled';
}

fillCup($cup);
echo $cup;
