<?php

namespace createTable;


class createTable {


  public $yearTable = [];

  protected $idtable;

  protected static $count = 0;

  function __construct() {
    $this->idtable = self::$count;
    self::$count++;
  }

  function addYear($year, array $mounts = []) {
    $this->yearTable[$year] = $mounts;
  }

  function createRowYear($year = 2019, array $mounts = []) {
    echo "<tr>" . "\n" .
      "<td>" . $year . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][jan]\" step='any' value=\"" . ($mounts['jan'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][feb]\" step='any' value=\"" . ($mounts['feb'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][mar]\" step='any' value=\"" . ($mounts['mar'] ?? '') . "\">" . "</td>" . "\n" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][q1]\" step='any' value=\"" . ($mounts['q1'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][apr]\" step='any' value=\"" . ($mounts['apr'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][may]\" step='any' value=\"" . ($mounts['may'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][jun]\" step='any' value=\"" . ($mounts['jun'] ?? '') . "\">" . "</td>" . "\n" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][q2]\" step='any' value=\"" . ($mounts['q2'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][jul]\" step='any' value=\"" . ($mounts['jul'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][aug]\" step='any' value=\"" . ($mounts['aug'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][sep]\" step='any' value=\"" . ($mounts['sep'] ?? '') . "\">" . "</td>" . "\n" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][q3]\" step='any' value=\"" . ($mounts['q3'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][oct]\" step='any' value=\"" . ($mounts['oct'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][nov]\" step='any' value=\"" . ($mounts['nov'] ?? '') . "\">" . "</td>" . "\n" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][dec]\" step='any' value=\"" . ($mounts['dec'] ?? '') . "\">" . "</td>" . "\n" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][q4]\" step='any' value=\"" . ($mounts['q4'] ?? '') . "\">" . "</td>" . "\n" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][" . $year . "][ytd]\" step='any' value=\"" . ($mounts['ytd'] ?? '') . "\">" . "</td>" . "\n";
    echo "</tr>" . "\n";
  }

  function render() {
    $this->addTopTable();
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

  function addTopTable() {
    echo "<table border='1px'>" . "<tr>" . "\n" .
      "\t<td>Year</td>" . "\n" .
      "\t<td>Jan</td>" . "\n" .
      "\t<td>Feb</td>" . "\n" .
      "\t<td>Mar</td>" . "\n" .
      "\t<td class='color'>Q1</td>" . "\n" .
      "\t<td>Apr</td>" . "\n" .
      "\t<td>May</td>" . "\n" .
      "\t<td>Jun</td>" . "\n" .
      "\t<td class='color'>Q2</td>" . "\n" .
      "\t<td>Jul</td>" . "\n" .
      "\t<td>Aug</td>" . "\n" .
      "\t<td>Sep</td>" . "\n" .
      "\t<td class='color'>Q3</td>" . "\n" .
      "\t<td>Oct</td>" . "\n" .
      "\t<td>Nov</td>" . "\n" .
      "\t<td>Dec</td>" . "\n" .
      "\t<td class='color'>Q4</td>" . "\n" .
      "\t<td class='color'>YTD</td>" . "\n";
    echo "</tr>" . "\n";
    echo "<span> <input type='submit' name='{$this->idtable}' value='Add Year'></span>";
  }
}


