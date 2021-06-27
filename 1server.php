<?php
  
 $number=readline("Server: ");
 $a = explode(' ', readline()); //read array
    for($i=0;$i<5;$i++)
    {
        if($a[$i]<50)
        {
            $number=$number/2;
        }
        else
        {
            $number=(2*$number)+1;
        }
    }
    
echo floor((int)$number);
  
?>