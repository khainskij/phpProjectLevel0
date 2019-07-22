<?php
require_once "src/class/createTable.php";
require_once "src/class/newTable.php";

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
      background: grey;
    }
  </style>
</head>
<body>
<?php
echo "<form action='' method='post'>";
// Add new Table

$arr_table = [];
$arr_rov_table = [];

if (isset($_POST['arr'])) {
  $createTable = [];

  if (isset($_POST['add_year'])) {
    foreach ($_POST['arr'] as $key => $years) {
//      $addYear = $key;
      $createTable[$key] = new \createTable\createTable();

      foreach ($years as $y => $m) {
        $createTable[$key]->addYear($y, $m);
      }
    }
    $createTable[0]->addOldYear();
  }
/*  elseif (isset($_POST['add_table'])){
      //    $createTable[$addYear]->addOldYear();
      $createTable[] = new \createTable\createTable();
      $createTable[count($createTable) - 1]->addYear(date("Y"));
      var_dump($createTable);
  }*/
  foreach ($createTable as $table) {
    $tableRender[] = $table->render();
  }

}
 else {
  $createTable = new \createTable\createTable();
  $createTable->addYear(date('Y'), []);
  $createTable->render();
}


echo "</table>" . "<input type='submit' name='save' value='Submit'>" .
  "<input type='submit' name='add_table' value='Add Table'>" ."</form>";
?>
</body>
</html>
