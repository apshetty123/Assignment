    <?php
$bread=readline("Enter nos of bread: ");// 9
$vada=readline("Enter nos of vada: ");//20
$samosa=readline("Enter nos of samosa: ");//3
$p=readline("Enter pice of vadapav: ");//15
$x=readline("price of samosapav: ");//10
$min_bread=1;

if($bread>=2)

{
    
    
    if ($p<=$x){
    $result1=0;
    $q=0;
 $val=samosapav($bread,$samosa);
$a=$val['price'];
$b=$val['bread'];
$c=$val['samosa'];
$remaining_samosa=$samosa-$c;
if ($b> $min_bread){
   $result1=vadapav($b,$vada);
 $q=$result1['price'];
}

echo $final=$a+$q;

} 
else{
    $r=0;
    $s=0;
    $val=vadapav($bread,$vada);
    $x=$val['price'];
    $y=$val['bread'];
    $z=$val['vada'];
    $remaining_vada=$vada-$z;
    if($y>$min_bread){
       $r=samosapav($y,$samosa);
       $s=$r['price'];

    }
    echo $final=$x+$s;
}

} 
else{
    echo "Insufficient Bread";
}
function samosapav($bread,$samosa)
{
    global $x;
    global $min_bread;
    $samosapav=($samosa*2);
    if ($samosapav<=$bread){
        $val['price']=($samosa * $x);
        $val['bread']=$bread-$samosapav;
        $val['samosa']=$samosa;
        return $val;
         }
         elseif($bread>$min_bread){
           
           return samosapav($bread, $samosa-1);
           
         }
       
        

}

function vadapav($bread,$vada){
    
    global $p;
    global $min_bread;
    $required=($vada*2);
    if ($required<=$bread){
        $val['price']=($vada * $p);
        $val['bread']=$bread-$required;
        $val['vada']=$vada;
        return $val;
         }
         elseif($bread>$min_bread){
           
           return vadapav($bread, $vada-1);
           
         }

}


?>
