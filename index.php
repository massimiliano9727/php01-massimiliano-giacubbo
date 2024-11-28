<?php

//traccia 1

$paiodiocchiali= 3;
$temperatura= 6.5;
$bulean= true;
$autore= 'massimiliano giacubbo';



//traccia 2 

// $1text="marco";
//$text2="hai";
//$text.3="sete";
//$text4="?";
//@text5="perche";
//&te-xt6='$text2';
//$text7='bevuto';
//$text8="tutto"


//correzione 

$text1=" marco ";
$text2=" hai ";
$text3=" sete ";
$text4=" ? ";
$text5=" perchè ";
$text6=" $text2 ";
$text7=" bevuto ";
$text8=" tutto ";

$print= $text1 . "" . $text2 . "" . $text3 . "" . $text4 . "" . $text5 . "" . $text2 . "" . $text7 . "" . $text8;

//var_dump ($print);



//traccia 3


$words1=[
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre',[
        'oscura', 'era', 89, [
            'mezzo', 'E',
        ],
    'ritrovai', 'per',
    ],
    'dritta'
    ];


$words2=[
    'elemento1'=> 25.89,
    'elemento2'=> 'possa',
    'elemento3'=>[
        'virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
    ];
    $words1[]='la';
    $words1[]='a';


    $resoult=$words1[6][3][1] . " " . $words2['elemento'] . " " . $words1[8] . " " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " " . $words1[9] ." " . $words1[0] . " " . $word2['elemento3'][2] . $words2['fine'];

    //echo $resoult;

//da qui in poi e stato reddato cn l'aiuto delle video pillole caricate a lezione

    // traccia 4

    foreach($user as $user){
        if($user['gender']== 'm'){
            echo"buongiorno sing." . $user['name'] . "" . $user['surname'] . "\n"; 
        }elseif($user['gender?'] == 'f'){
            echo"buongiorno sig.ra" . $user['name'] . "" . $user['surname'] . "\n";
        }else{
            echo"buongiorno" . $user['name'] . "" . $user['surname'] . "\n";
        }
    }



    //traccia 5



    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $counter=0;

    $total=0; 


    foreach($numbers as $number){
        if($number %2 ==0){
            $total +=0;
            $counter++;
        }
    }

echo$total/$counter;

