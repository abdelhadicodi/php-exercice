<?php
function prime($num){
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++){
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 7;
$var = prime($num);
if ($var == 1)
   echo "Prime number";
else
   echo "Not prime number"
?>