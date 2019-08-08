<?php
require_once "src/class/createTable.php";
require_once "validation.php";

use \createTable\createTable as createTable;

//Getting the key for one table when a new row is added
$tad = NULL;
foreach ($_POST as $k => $p) {
  if ($p == 'Add Year') {
    $tad = $k;
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task</title>
  <style>
    .link {
      margin: auto;
      padding: 15px;
    }

    .link a {
      margin: 20px;
      padding: 30px;
      text-decoration: none;
      font-size: 25px;
    }

    .color {
      background: #afafaf;
    }

    tr td input {
      width: 60px;
    }

    .color input {
      background: #b2b2b2;
    }
  </style>
</head>
<body>
<?php
echo "<form action='' method='post'>";

//Adding a new row to a table
if (isset($_POST['arr'])) {
  $createTable = [];

  if (isset($tad)) {
    foreach ($_POST['arr'] as $key => $years) {
      $createTable[$key] = new createTable();

      foreach ($years as $y => $m) {
        $createTable[$key]->addYear($y, $m);
      }
    }
    $createTable[$tad]->addOldYear();
  }

  //Adding a new table to an array
  elseif (isset($_POST['add_table'])) {
    foreach ($_POST['arr'] as $key => $years) {
      $createTable[$key] = new createTable();

      foreach ($years as $y => $m) {
        $createTable[$key]->addYear($y, $m);
      }
    }
    $createTable[] = new createTable();
    $createTable[count($createTable) - 1]->addYear(date("Y"));
  }

  //Displays tables from an array
  foreach ($createTable as $table) {
    $tableRender[] = $table->render();
  }
}
else {
  $createTable = new createTable();
  $createTable->addYear(date('Y'), []);
  $createTable->render();
}

echo "</table>" . "</br>" . "\n" . "<input type='submit' name='save' value='Submit' formaction='validation.php'>" . "\n" .
  "<input type='submit' name='add_table' value='Add Table'>" . "</form>";
?>
</body>
</html>
