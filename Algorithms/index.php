<?php 
  

/*
    Сортировка вставками
*/



$mas=[69,39,11,82,92,29,9];     

 

for($step=floor(count($mas)/2);$step>0;$step=$step-2){
    if($step==0){
        $step=1;
    }
    for($i=0;$i+$step<count($mas);$i++){
        if($mas[$i]>$mas[$i+$step]){
            $k=$mas[$i];
            $mas[$i]=$mas[$i+$step];
            $mas[$i+$step]=$k;
        }
    }
}

 print_r($mas);


 
/*
    Сортировка вставками

$mas=[69,39,11,82,92,29];

for($i=1;$i<count($mas);$i++){
    for($j=$i;$mas[$j]<$mas[$j-1] && $j!=0;$j--){
        $k=$mas[$j];
        $mas[$j]=$mas[$j-1];
        $mas[$j-1]=$k;
    }
}

print_r($mas);

*/

Код добавить

<?php 
  

/*
    Сортировка вставками
*/


$mas=[69,39,11,82,92,29,9];

 

for($step=floor(count($mas)/2);$step>0;$step=$step-2){
    if($step==0){
        $step=1;
    }
    for($i=0;$i+$step<count($mas);$i++){
        if($mas[$i]>$mas[$i+$step]){
            $k=$mas[$i];
            $mas[$i]=$mas[$i+$step];
            $mas[$i+$step]=$k;
        }
    }
}

 print_r($mas);





/*
    Сортировка вставками

$mas=[69,39,11,82,92,29];

for($i=1;$i<count($mas);$i++){
    for($j=$i;$mas[$j]<$mas[$j-1] && $j!=0;$j--){
        $k=$mas[$j];
        $mas[$j]=$mas[$j-1];
        $mas[$j-1]=$k;
    }
}

print_r($mas);

*/
