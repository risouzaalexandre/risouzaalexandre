<?php
// return depth of given array
// if Array is a string ArrayDepth() will return 0
// usage: int ArrayDepth(array Array)

function ArrayDepth($Array,$DepthCount=-1,$DepthArray=array()) {
  $DepthCount++;
  if (is_array($Array))
    foreach ($Array as $Key => $Value)
      $DepthArray[]=ArrayDepth($Value,$DepthCount);
  else
    return $DepthCount;
  foreach($DepthArray as $Value)
    $Depth=$Value>$Depth?$Value:$Depth;
  return $Depth;
}
?>
up
down
-10info at hotkey404 dot com ¶1 year ago
Updated code of 'indioeuropeo' with option to input string-based keys.

INPUT:
array(4) {
  ["a"]=>
  string(5) "Apple"
  ["b"]=>
  string(6) "Banana"
  ["c"]=>
  string(3) "Cat"
  ["d"]=>
  string(3) "Dog"
}

OUTPUT:
array(4) {
  ["a"]=>
  string(5) "Apple"
  ["d"]=>
  string(3) "Dog"
  ["b"]=>
  string(6) "Banana"
  ["c"]=>
  string(3) "Cat"
}

FUNCTION:
<?php
function array_move_elem($array, $from, $to){
// return if non-numeric couldn't be found or from=to
    if(!is_numeric($from)){
        if(array_search($from, array_keys($array))!==FALSE){
            $from = array_search($from, array_keys($array));
        }else{
            return $array;
        }
    }
    $array_numeric_keys = array();
    foreach($array as $k => $v){
        $array_numeric_keys[] = $k;
    }
    if ($from == $to) { return $array; }
    $c = count($array_numeric_keys);
    if (($c > $from) and ($c > $to)) {
        if ($from < $to) {
            $f = $array_numeric_keys[$from];
            for ($i = $from; $i < $to; $i++) {
                $array_numeric_keys[$i] = $array_numeric_keys[$i+1];
            }
            $array_numeric_keys[$to] = $f;
        } else {
            $f = $array_numeric_keys[$from];
            for ($i = $from; $i > $to; $i--) {
                $array_numeric_keys[$i] = $array_numeric_keys[$i-1];
            }
            $array_numeric_keys[$to] = $f;
        }
      
    }
    $array_new = array();
    foreach($array_numeric_keys as $v){
        $array_new[$v] = $array[$v];
    }
    return $array_new;
}
?>