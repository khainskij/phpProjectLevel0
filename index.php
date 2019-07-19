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
echo "<form action='' method='post'>" . "<table border='1px'>";
$builder_table->addTopTable();
// Add new Table
$arr_table = [];
$arr_rov_table = [];
/*$row_year = [
  'year' => 2019,
  'jan' => '',
  'feb' => '',
  'mar' => '',
  'q1' => '',
  'apr' => '',
  'may' => '',
  'jun' => '',
  'q2' => '',
  'jul' => '',
  'aug' => '',
  'sep' => '',
  'q3' => '',
  'oct' => '',
  'nov' => '',
  'dec' => '',
  'q4' => '',
  'ytd' => '',
];*/


if($_SERVER['REQUEST_METHOD'] == "POST"){

  /*if (isset($_POST['arr'])){

    foreach ($_POST['arr'] as $key => $item) {
      if (!isset($arr_table[$key])){
        $arr_table[$key] = new \createTable\createTable($item);
      }
    }
    var_dump($arr_table);
    foreach ($arr_table as $method){
      $show_method[] = $method->builderTable();
    }
  }*/
  if (isset($_POST['add_year'])){
    if (isset($_POST['arr']))
      foreach ($_POST['arr'] as $item)
    $arr_table[] = new \createTable\createTable($item);
    foreach ($arr_table as $key => $method){
      $show_method[$key] = $method->createRowYear();
    }
  }
}






echo "</table>" . "<input type='submit' name='save' value='Submit'>" .
  "<input type='submit' name='add_table' value='Add Table'>" ."</form>";
?>
</body>
</html>