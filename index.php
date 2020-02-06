<?php
 
$n = trim(fgets(STDIN));

$p=[];
$l=[];
while($n>0){
    $m=explode(" ", trim(fgets(STDIN)));
    array_push( $p , $m);
    array_push( $l , NULL);
    $n--;
}
$sum=0;
for($i=0;$i<count($p);$i++){
    for($j=0;$j<count($p);$j++){
        if($p[$i][0]<$p[$j][0] && $p[$i][1]<$p[$j][1]){
            if(empty($l[$i])){
                $l[$i]=1;
            }
        }        
    }
}

for($i=0;$i<count($l);$i++){
    if(empty($l[$i])){
        $sum++;
    }
}

echo $sum;


