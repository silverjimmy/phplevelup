<?php
 $loggedIn = true;
 
 /*
 if($loggedIn){
     echo 'You are logged In';
 } else {
     echo 'You are not logged In';
 }


//  echo ($loggedIn) ? 'You are logged In' : 'You are not logged In';

$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

$age = 20;
$score = 15;

echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Expectional'):($age > 10 ? 'Horrible':'Avergae'));
*/
?>
<div>
    <?php if ($loggedIn) : ?>
        <h1>welcome User</h1>
    <?php else: ?>
        <h1>welcome Guest</h1>
    <?php endif;?>
</div>
