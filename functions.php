<?php
    #block of code that can be repeatedly called

    #create simple function
    function simpleFunction(){
        echo 'HelloWorld <br>';
    }
    #run simple function
simpleFunction();

#can include @aprams also called @args
function sayHello($name){
    echo "Hello $name <br>";
}

// sayHello('bruno');
// sayHello();

function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(2,3);

//by ref
$myNum = 10;

function addfive($num){
    $num += 5;
}
function addten(&$num){
    $num += 10;
}

addfive($myNum);
echo "$myNum";
addten($myNum);
echo "$myNum";
?>