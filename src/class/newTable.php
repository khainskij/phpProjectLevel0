<?php
/*require_once "createTable.php";

use createTable\createTable;

class newTable extends createTable {

  public $arraytables = [];

   function showNewTable($key){
     $this->arraytables[$key] = new createTable();
   }

  function printTable() {
    foreach ($this->arraytables as $item){
      $item->builderTable();
    }
  }
}
$newtable = new newTable();*/

class builderTable {

  function addTopTable() {
    echo "<input type='submit' name='add_year' value='Add Year'>";
    echo "<tr>" .
      "<td>Year</td>" .
      "<td>Jan</td>" .
      "<td>Feb</td>" .
      "<td>Mar</td>" .
      "<td class='color'>Q1</td>" .
      "<td>Apr</td>" .
      "<td>May</td>" .
      "<td>Jun</td>" .
      "<td class='color'>Q2</td>" .
      "<td>Jul</td>" .
      "<td>Aug</td>" .
      "<td>Sep</td>" .
      "<td class='color'>Q3</td>" .
      "<td>Oct</td>" .
      "<td>Nov</td>" .
      "<td>Dec</td>" .
      "<td class='color'>Q4</td>" .
      "<td class='color'>YTD</td>";
    echo "</tr>";
  }

}

$builder_table = new builderTable();

