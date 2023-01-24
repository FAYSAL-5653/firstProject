<?php

$num = 0;

$firstResult = $num >0 ? 'posative':($num<0?($num<-10? 'the valu is below -0':'negative'):'its zero');
echo $firstResult;
?>