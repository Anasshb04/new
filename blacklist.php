<?php

$blacklist=array(
    array(
        'name'=> 'Adam',
        'age'=> 20,
        'specs'=> 'slim,blonde',
        'id'=> 123
    ),
    array(
        'name'=> 'Maik',
        'age'=> 22,
        'specs'=> 'stocky,black',
        'id'=> 124
    ),
    array(
        'name'=> 'Mazen',
        'age'=> 24,
        'specs'=> 'tall,bald',
        'id'=> 125
    ),
    array(
        'name'=> 'Toby',
        'age'=> 29,
        'specs'=> 'short,red',
        'id'=>126
    ),
    array(
        'name'=> 'Thomas',
        'age'=> 32,
        'specs'=> 'short,bald',
        'id'=> 127
    ),
    array(
        'name'=> 'Anton',
        'age'=> 40,
        'specs'=> 'plump,bald',
        'id'=> 128
    )
);
$blacklist1=array(
    array(
        'name'=> 'Sam',
        'age'=> 43,
        'specs'=> 'short,grey',
        'id'=> 111
    ),
    array(
        'name'=> 'Oliver',
        'age'=> 42,
        'specs'=> 'muscular,brown',
        'id'=> 112
    ),
    array(
        'name'=> 'Ahmad',
        'age'=> 52,
        'specs'=> 'tall,grey',
        'id'=> 113
    ),
    array(
        'name'=> 'Reda',
        'age'=> 62,
        'specs'=> 'short,brown',
        'id'=> 114
    )

);
function id(){
    for($id=110;$id<130;$id++){
        if($id>=111 && $id<115){
            echo $id.("مجرم تم القبض عليه");
            echo "<br>";
        }
        else if($id>=123 && $id<=128){
            echo $id.("مجرم  لم يتم القبض عليه");
            echo "<br>";
        }
        else{
            echo $id.('ليس مجرم');
            echo "<br>";
        }
    }
}
id();













?>