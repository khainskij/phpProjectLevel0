<?php

namespace createTable;


class createTable {


  public $yearTable = [];
  protected $idtable;
  protected static $count = 0;

  function __construct() {
    $this->idtable = self::$count;
    self::$count++;
//    $this->rowYear = $arr_table;

  }
  function addYear($year, array $mounts = []) {
    $this->yearTable[$year]  = $mounts;
  }

  function createRowYear($year = 2019, array $mounts = []) {
    echo "<tr>" .
      "<td>" . $year . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][jan]\" min=\"1\" max=\"1\" value=\"" . ($mounts['jan'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][feb]\" min=\"1\" max=\"1\" value=\"" . ($mounts['feb'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][mar]\" min=\"1\" max=\"1\" value=\"" . ($mounts['mar'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][q1]\" min=\"1\" max=\"1\" value=\"" . ($mounts['q1'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][apr]\" min=\"1\" max=\"1\" value=\"" . ($mounts['apr'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][may]\" min=\"1\" max=\"1\" value=\"" . ($mounts['may'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][jun]\" min=\"1\" max=\"1\" value=\"" . ($mounts['jun'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][q2]\" min=\"1\" max=\"1\" value=\"" . ($mounts['q2'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][jul]\" min=\"1\" max=\"1\" value=\"" . ($mounts['jul'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][aug]\" min=\"1\" max=\"1\" value=\"" . ($mounts['aug'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][sep]\" min=\"1\" max=\"1\" value=\"" . ($mounts['sep'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][q3]\" min=\"1\" max=\"1\" value=\"" . ($mounts['q3'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][oct]\" min=\"1\" max=\"1\" value=\"" . ($mounts['oct'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][nov]\" min=\"1\" max=\"1\" value=\"" . ($mounts['nov'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][dec]\" min=\"1\" max=\"1\" value=\"" . ($mounts['dec'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][q4]\" min=\"1\" max=\"1\" value=\"" . ($mounts['q4'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". $year ."][ytd]\" min=\"1\" max=\"1\" value=\"" . ($mounts['ytd'] ?? ''). "\">" . "</td>";
    echo "</tr>";
  }

  function render() {
    self::addTopTable();
    foreach ($this->yearTable as $year => $mounts) {
      $this->createRowYear($year, $mounts);
    }
  }

  function addOldYear() {
    $old = min(array_keys($this->yearTable));
    $tmp = $this->yearTable;
    $this->yearTable = [];
    $this->yearTable = [($old - 1) => []] + $tmp;
  }
  static function addTopTable() {
    echo "<input type='submit' name='add_year' value='Add Year'>";
    echo  "<table border='1px'>" . "<tr>" .
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


