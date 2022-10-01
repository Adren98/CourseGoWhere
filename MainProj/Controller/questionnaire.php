<?php
var_dump($_POST);
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
//var_dump($usrContent);
$totalform = ['business', 'engineering','adm','it','health','appscience','environment','humanities','maritime'];
$totalvalform=array();
}
$counter = 1;
$sum =0;
$index =0;
foreach ($usrContent as $value){
    if($counter ==3){
        $sum = $sum + (int)$value;
        $totalvalform[$index]=$sum;
        $sum =0;
        $index +=1;
        $counter=1;
    }
//    var_dump($value);
    else{
        $sum = $sum + (int)$value;
        $counter +=1;
    }



}


//var_dump($totalform);
//var_dump($totalvalform);

//sorting
for($i=0;$i<count($totalvalform);$i++){
    for($j=$i+1;$j<count($totalvalform);$j++){
        if($totalvalform[$i]<$totalvalform[$j]){
            $temp = $totalvalform[$i];
            $totalvalform[$i]=$totalvalform[$j];
            $totalvalform[$j]=$temp;


            $order = $totalform[$i];
            $totalform[$i]=$totalform[$j];
            $totalform[$j]=$order;
        }
    }
}

$top= $totalvalform[0];
$topschool=array();
$counter=0;
foreach($totalvalform as $value){
    if($value == $top){
        $topschool[$counter]=$totalform[$counter];
        $counter +=1;
    }
    else{
        break;
    }

}
$SQL = "SELECT * FROM coursecatalogue WHERE school = ";
foreach($topschool as $value){
    if($value = 'business'){
        $SQL = $SQL . "'business'";
    }
}
//var_dump($totalform);
//var_dump($totalvalform);