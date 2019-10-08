<?php 
function changeTheWord($word){
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $len = strlen($word);
    $res = '';
for($i = 0; $i < $len; ++$i) {
  $pos = strpos($alphabet, $word[$i]);
  if ($word[$i] == 'z'){
    $res[$i] = 'a';
    }
  else {
    $res[$i] = $alphabet[$pos+1];
    }
}
  
    echo $res;  
}

changeTheWord('rzkzl');

?>
