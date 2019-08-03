<?php
require_once "src/class/validTable.php";

use \createTable\validTable as validTable;


if (isset($_POST['save'])) {
  $validation_of_table = new validTable();
  $valid_tables = $validation_of_table->validationTables($_POST);

  foreach ($_POST['arr'] as $var) {
    if ($validation_of_table->validationTable($var) && $valid_tables) {
    }
    else {
      echo "Invalid";
      die();
    }
  }
  echo "Valid";
  die();
}




