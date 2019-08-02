<?php
if (isset($_POST['save'])) {
  $valid_tables = validTables($_POST);
  foreach ($_POST['arr'] as $var) {
    if (validTab($var) && $valid_tables) {
    }
    else {
      echo "Invalid";
      die();
    }
  }
  echo "Valid";
  die();
}

function validationQuarters(array $table) {
  $quarter[] = quarterValue(floatval($table['jan'] ?? 0), floatval($table['feb'] ?? 0), floatval($table['mar'] ?? 0));
  $quarter[] = quarterValue(floatval($table['apr'] ?? 0), floatval($table['may'] ?? 0), floatval($table['jun'] ?? 0));
  $quarter[] = quarterValue(floatval($table['jul'] ?? 0), floatval($table['aug'] ?? 0), floatval($table['sep'] ?? 0));
  $quarter[] = quarterValue(floatval($table['oct'] ?? 0), floatval($table['nov'] ?? 0), floatval($table['dec'] ?? 0));

  foreach ($quarter as $key => $item) {
    if (abs($item - floatval($table['q' . ($key + 1)] ?? 0)) > 0.05) {
      return FALSE;
    }
  }

  $ytd = yearValue($quarter);

  if (abs($ytd - floatval($table['ytd'] ?? 0)) > 0.05) {
    return FALSE;
  }

  return TRUE;
}


function quarterValue(float $mount_1 = 0.0, float $mount_2 = 0.0, float $mount_3 = 0.0) {
  $sum_mount = ($mount_1 + $mount_2 + $mount_3 + 1);
  $quarter_value = $sum_mount != 1 ? round(($sum_mount / 3), 2) : 0;
  return $quarter_value;
}

function yearValue(array $quarters) {
  $sum = 0.0;
  foreach ($quarters as $quarter) {
    $sum += $quarter;
  }
  $sum += 1;
  $year_value = $sum != 1 ? ($sum / 4) : 0;
  return $year_value;
}


function validTab($table, &$startPos = [], &$endPos = []) {
  $start = FALSE;
  $end = FALSE;
  $old_year = NULL;
  $prevYear = NULL;

  foreach ($table as $ke => $it) {
    if ($prevYear == NULL) {
      $prevYear = $ke;
    }
    $old_year = $prevYear;
    $prevYear = $ke;

    if (($ke - $old_year) > 1) {
      return FALSE;
    }



    foreach ($it as $mu => $elem) {
      if (('q1' == $mu) || ('q2' == $mu) || ('q3' == $mu)
        || ('q4' == $mu) || ('ytd' == $mu)) {
        continue;
      }
      if ($elem != '') {
        if ($end) {
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
    if (!validationQuarters($it)) {
      return FALSE;
    }
  }

  return TRUE;
}

function validTables($table) {
  $tables = $table['arr'];
  $count = count($tables);
  $year_arr = [];
  foreach ($tables as $key => $table) {
    $year_arr = array_merge($year_arr, array_keys($table));
  }

  $min_year = min($year_arr);
  $max_year = max($year_arr);

  for ($current_year = $min_year; $current_year <= $max_year; $current_year++) {
    $year_info = [];
    for ($j = 0; $j < $count; $j++) {
      if (isset($tables[$j][$current_year])) {
        $year_info[] = $tables[$j][$current_year];
      }
    }
    $year_month_data = [];
    foreach ($year_info as $table_same_year) {
      foreach ($table_same_year as $month_name => $month_value) {
        if ($month_name == "q1" || $month_name == "q2" || $month_name == "q3"
          || $month_name == "q4" || $month_name == "ytd") {
          continue;
        }
        else {
          $year_month_data[$month_name][] = $month_value;
        }
      }
    }

    foreach ($year_month_data as $count_year_item) {
      continue;
    }

    $count_year = count($count_year_item);

    if ($count >= 2) {
      if ($count_year == 1 && !empty($count_year_item[0])) {
        return FALSE;
      }
    }
    if ($count_year > 1) {
      if (array_has_empty_item($year_month_data)) {
        return FALSE;
      }
      else {
        continue;
      }
    }
    else {
      continue;
    }
  }
  return TRUE;
}

function array_has_empty_item($array) {
  foreach ($array as $element) {
    foreach ($element as $man_value) {
      if (array_filter($element, function ($name) {return $name === '0' ? true: !empty($name);} )) {
        if ($man_value === "") {
          return TRUE;
        }
        else {
          continue;
        }
      }
    }
  }
  return FALSE;
}



