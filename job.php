<?php
$start = $argv[1];
$end= $argv[2];

for($i=$start; $i<$end; $i++){
 echo "No.{$i},Hello,Process".PHP_EOL;
 sleep(1);
}
