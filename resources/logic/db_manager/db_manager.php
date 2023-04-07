<?php
namespace DatabaseRepository;

use SessionRepository\SessionManager;
use mysqli as MySQL;


class DatabaseManager{
    private MySQL $connection;
    function __construct() {
        $servername = "hassankajila.com";
        $username = "u601424401_hassankajila";
        $password = "tZ=Y#0mR"; // %k)Qh$H&5ZUXiJw
        $dbname = "u601424401_hassan_db";
        $this->connection = new MySQL($servername, $username, $password, $dbname);
    }

    public function connection(): MySQL
    {
        return $this->connection;
    }

    public function is_database_connected(): bool
    {
        if ($this->connection->connect_error) return false;
        //die("Connection failed: " . $conn->connect_error);
        return true;
    }

    function query_to_array(string $query): bool|array
    {
        $result = $this->connection->query($query);
        $arr = array();
        if ($result->num_rows < 0) return false;
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    }

    private function query_insert(string $query): void
    {
        $this->connection->query($query);
    }

    public function get_clients(): bool|array
    {
        return $this->query_to_array("SELECT * FROM test_user");
    }

    public function get_client_by_id($id): bool|array
    {
        return $this->query_to_array("SELECT * FROM users WHERE username = '$id' ");
    }


    static function print_array($row): void
    {
        foreach ($row as &$value) {
            print_r($value);

        }
    }

}

