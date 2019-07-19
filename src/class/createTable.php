<?php

namespace createTable;


class createTable {

  public $rowYear = [];
  public $yearTable = [];
  protected $idtable;
  protected static $count = 0;

  function __construct($arr_table) {
    $this->idtable = self::$count;
    self::$count++;
    $this->rowYear = $arr_table;

  }

  function createRowYear() {
    echo "<tr>" .
      "<td>" . ($this->rowYear['year'] ?? 2019) . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][jan]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['jan'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][feb]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['feb'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][mar]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['mar'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][q1]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['q1'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][apr]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['apr'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][may]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['may'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][jun]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['jun'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][q2]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['q2'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][jul]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['jul'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][aug]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['aug'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][sep]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['sep'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][q3]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['q3'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][oct]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['oct'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][nov]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['nov'] ?? ''). "\">" . "</td>" .
      "<td>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][dec]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['dec'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][q4]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['q4'] ?? ''). "\">" . "</td>" .
      "<td class='color'>" . "<input type='number' name=\"arr[$this->idtable][". ($this->rowYear['year'] ?? 2019) ."][ytd]\" min=\"1\" max=\"1\" value=\"" . ($this->rowYear['ytd'] ?? ''). "\">" . "</td>";
    echo "</tr>";
  }

  function saveRowTable() {

  }
/*  function builderTable() {

    echo "<form action='' method='post'>" . "<table border='1px'>";
    echo "<input type='submit' name='add_year' value='Add Year'>";
    $this->addTopTable();
    $this->createRowYear();
    echo "</table>" . "<input type='submit' name='save' value='Submit'>" .
      "<input type='submit' name='add_table' value='Add Table'>" ."</form>";
  }*/
}


