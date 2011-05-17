<?php

$out = exec('curl googl.com --max-time 5');
if (strstr($out, 'timed out') == $out){
  echo 'false';
} else {
  echo 'true';
}
