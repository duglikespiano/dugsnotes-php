<?php
function getPermission()
{
  sleep(2);
  return 2;
}

$permission = getPermission();

switch ($permission) {
  case 1:
    echo "<h1>Hello world!</h1>";
    break;
  case 2:
    echo "<h1>Hello mod!</h1>";
    break;
  default:
    echo "<h1>Hello guest!</h1>";
    break;
}

function getUsers()
{
  sleep(2);
  return ['Jone', 'Jane'];
}

$userCount = count(getUsers());

for ($i = 0; $i < $userCount; $i++) {
  echo $i;
} // It will execute a function as much as it needs if a value is expressed as a return of a function


?>


<?php
// admin : 1, mod : 2, guest : any other number
/*
$permission = 1;

if ($permission === 1) {
?><h1>Hello admin</h1><?php
                      // echo "<h1>Hello admin</h1>";
                    } else if ($permission === 2) {
                      ?><h1>Hello mod</h1><?php
                                        } else {
                                          ?><h1>hello guest</h1><?php
                                                              }
                                                              ?>

                                                              <?php $permission = 1; ?>
<?php if ($permission === 1) : ?>
  <h1>hello admin</h1>
<?php elseif ($permission === 2) : ?>
  <h1>hello mod</h1>
<?php else : ?>
  <h1>hello guest</h1>
<?php endif; ?>

<?php if (getPermission() === 1) : ?>
  <h1>hello admin</h1>
<?php elseif (getPermission() === 2) : ?>
  <h1>hello mod</h1>
<?php else : ?>
  <h1>hello guest</h1>
<?php endif; ?>

<?php if ($permission === 1) : ?>
  <h1>hello admin</h1>
<?php elseif ($permission === 2) : ?>
  <h1>hello mod</h1>
<?php else : ?>
  <h1>hello guest</h1>
<?php endif; ?>
*/