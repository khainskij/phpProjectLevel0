<?php

if (isset($_POST['save'])) {
  $var = $_POST;

  if (validTab($var) || validTables($var)){
      echo "Valid";
  }else {
    echo "Invalid";
  }
}

function validTab($table,  &$startPos = [], &$endPos = []) {
  $start = FALSE;
  $end = FALSE;
  $old_year = NULL;
  foreach ($table['arr'] as $item) {
    var_dump($table['arr']);
    foreach ($item as $ke => $it) {
      if ($old_year == NULL) {
        $old_year = $ke;
      }
      if (($ke - $old_year) > 1) {
        return FALSE;
      }
      foreach ($it as $mu => $elem){
        if ( ('q1' == $mu) || ('q2' == $mu) || ('q3' == $mu)
          || ('q4' == $mu) || ('ytd' == $mu)){
          continue;
        }
        if ($elem != ''){
          if ($end){
            return FALSE;
          }
          $start = TRUE;
          if (count($startPos) < 1) {
            $startPos = [$ke, $mu];
          }
          $endPos = [$ke, $mu];
        }
        else {
          if (!$start) {
            $start = FALSE;
          }
          else {
            $end = TRUE;
          }
        }
      }
    }
  }
  return TRUE;
}
function validTables($table){
  var_dump($table);
  foreach ($table['arr'] as $value){
    foreach ($value as $year => $item){
      var_dump($item);
    }
  }
  return TRUE;
}


