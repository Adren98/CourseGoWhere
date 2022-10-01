<?php

if(isset($_POST['submit'])) {

    $usrContent=array();
$arrForm = ['business1','business2','business3',
    'engineering1','engineering2','engineering3',
    'adm1','adm2','adm3',
    'it1','it2','it3',
    'health1','health2','health3',
    'appscience1','appscience2','appscience3',
    'environment1','environment2','environment3',
    'humanities1','humanities2','humanities3',
    'maritime1','maritime2','maritime3','checkboxSchool'

];
foreach ($arrForm as $value) {

    if(isset($_POST[$value])){
        $usrContent[$value]=$_POST[$value];
    }
    else{
        $usrContent[$value]="";
    }
}
var_dump($usrContent);
$totalform = ['business', 'engineering','adm','it','health','appscience','environment','humanities','maritime'];
$totalvalform=array();
}
$counter = 0;
$sum =0;
$index =0;
foreach ($usrContent as $value){
    if($counter %3 ==0){
        $sum = $sum + $value;
        $totalform[$index]=$sum;
        $sum =0;
        $index +=1;
    }
    $sum = $sum + $value;
    $counter +=1;

}
var_dump($totalform);
var_dump($totalvalform);