<?php
    /*
    For
    While
    Do...While
    Foreach
    */
    #Forlopp
    # @params -init,condition,inc
/*
    for($i = 0;$i<10;$i++){
        echo $i;
        echo '<br>';
    }
*/
    #while Loop
    # @params -condition
/*
    $i = 0;

    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }
*/

#Do..while
# @params-condition
/*
$i = 0;
do{
    echo $i;
    echo '<br>';
    $i++;
}
while($i<11);
*/
#Foreach

$people =['bruno','opiyo','ocen'];
foreach($people as $person){
    echo $person;
    echo '<br>';
}

$people =['bruno'=>'bruno@gmail.com','opiyo' => 'asd@gmail.com','ocen' => 'asdd@gmail.com'];
foreach($people as $person => $email){
    echo $person.': '.$email;
    echo '<br>';
}


?>
