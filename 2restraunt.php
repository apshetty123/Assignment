<?php
$bread=readline("Enter nos of bread: ");
$vada=readline("Enter nos of vada: ");
$samosa=readline("Enter nos of samosa: ");
$p=readline("Enter pice of vadapav: ");
$x=readline("price of samosapav: ");
$min_bread=1;
if($bread>2)

{
    
    
    if ($p<$x){
    
 $result3=samosapav($bread,$samosa);
     $bread-=($samosa *2);
     $samosa=0;
     if ($bread >$min_bread){
         $result5=vadapav($bread,$vada);
     }
     echo $final=$result3+$result5;
    }
    else {
        $result4=vadapav($bread,$vada);
        $bread-=($vada *2);
        $vada=0; 
        if ($bread >$min_bread){
            $r=samosapav($bread,$samosa);
        }
        echo $final2=$result4+$r;
    }

}

else{
    echo "Insufficient Bread";
}
function samosapav($bread,$samosa)
{
    global $x;
    global $min_bread;
    
    $result=($samosa *2);
    
    if ($result<$bread){
        $result2=($samosa * $x);
        return $result2;
         }
         else{
             if ($bread>$min_bread){
                return $x;
             }
             
         }
       
        

}

function vadapav($bread,$vada){
    global $p;
    global $min_bread;
    $required=($vada*2);
    if ($required<$bread){
        $price=($vada * $p);
        return $price;
         }
         else {
            if ($bread>$min_bread){
               return $p;
            }

}
}

?>