<?php

class dataBase {

    private $host;
    private $user;
    private $pass;
    private $dBase;
    private $queryFields = NULL;
    private $queryValues = NULL;
    private $queryIquality = NULL;
    private $sql;
    private $query;
    public $table;
    public $fields; //array
    public $values; //array

    public function __construct() {
        $this->connection();
    }

    private function connection() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "12345";
        $this->dBase = "collection";

        mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->dBase);
    }

    //$type == 1 -> Insert
    //$type == 2 -> Update
    //$type == 3 -> Delete
    private function buildQuery($type) {
        $cont = count($this->fields);

        for ($i = 0; $i < $cont; $i++) {
            //Se tiver mais de 1
            if ($i < $cont - 1) {
                if ($type == 1) {
                    $this->queryFields .= $this->fields[$i] . ", ";
                    $this->queryValues .= "'" . $this->values[$i] . "', ";
                } elseif ($type == 2) {
                    
                } elseif ($type == 3) {
                    //$this->queryFields .= $this->fields[$i] . "=" . "'" .
                    //      $this->values[$i] . "' AND ";
                }
                //Se tiver apenas 1
            } else {
                if ($type == 1) {
                    $this->queryFields .= $this->fields[$i];
                    $this->queryValues .= "'" . $this->values[$i] . "'";
                } elseif ($type == 2) {
                    
                } elseif ($type == 3) {
                    $this->queryIquality .= $this->fields[$i] . "=" . "'" .
                            $this->values[$i] . "'";
                } elseif ($type == 4) {
                    $this->queryIquality .= $this->fields[$i] . "=" . "'" .
                            $this->values[$i] . "'";
                }
            }
        }
    }

    public function insertValues() {
        $this->buildQuery(1);

        $this->sql = "INSERT INTO " . $this->table . " (" . $this->queryFields .
                ") VALUES (" . $this->queryValues . ")";
        $this->query = mysql_query($sql);
        $this->result = mysql_affected_rows();

        return $this->result;
    }

    public function updateValues() {
        
    }

    public function deleteValues() {
        $this->buildQuery(3);

        $this->sql = "DELETE FROM " . $this->table . " WHERE " .
                $this->queryFields;
        $this->query = mysql_query($sql);
        $this->result = mysql_affected_rows();

        return $this->result;
    }

    public function selectValues($string) {
        $this->buildQuery(4);

        $this->sql = "SELECT * FROM " . $this->table . " WHERE " .
                $this->queryIquality . " ORDER BY " . $string . " ASC";
        $this->query = mysql_query($sql);
        $this->result = mysql_affected_rows();

        return $this->result;
    }

}

?>