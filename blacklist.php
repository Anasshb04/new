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
foreach($blacklist as $id=> $number){
    echo $number['id']."مجرم لم يتم القبض عليه";
    echo "<br>";
}

foreach($blacklist1 as $id=> $number){
    echo $number['id']."مجرم تم القبض عليه";
    echo "<br>";
}
?>