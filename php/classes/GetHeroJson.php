<?php

$test = new QueryDatabase();
print_r($test->getResults(null));

class QueryDatabase {

    private $_db;
    protected $_result;
    public $results;

    public function __construct() {
        $this->_db = new mysqli('localhost', 'root', '', 'sencha003');

        $_db = $this->_db;

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }
        //
        mysql_query("SET NAMES UTF8");
        return $_db;
    }

    public function getResults($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT name,email,phone FROM heroes") or
                die('Connection Error: ' . $_db->connect_error);

        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();

        //  return $results;
        return json_encode($results);



//     $try999='   data: { items: [              { name: 'Jean Luc', email: "jeanluc.picard@enterprise.com", phone: "555-111-1111" },              { name: 'Worf', email: "worf.moghsson@enterprise.com", phone: "555-222-2222" },              { name: 'Deanna', email: "deanna.troi@enterprise.com", phone: "555-333-3333" },              { name: 'Data', email: "mr.data@enterprise.com", phone: "555-444-4444" }              ]}';
// echo $try999;
//     return $try999;
    }

}
