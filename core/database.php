<?php
class Database
{
    private const DB_HOST = "localhost";
    private const DB_USER = "root";
    private const DB_PASS = "";
    private const DB_NAME = "6_oop_crud";
    private $conn;

    public function __construct()
    {
        return $this->conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }

    public function get_all($table)
    {
        $sql = "SELECT * FROM `$table`";
        $result = $this->conn->query($sql);
        $records = $result->fetch_all(MYSQLI_ASSOC);
        return $records ? $records : false;
    }

    public function get_single($table, $id)
    {
        $sql = "SELECT * FROM `$table` WHERE `id` = $id LIMIT 1";
        $result = $this->conn->query($sql);
        $records = $result->fetch_assoc();
        return $records ? $records : false;
    }

    public function create($table, $data)
    {
        $columns = implode("`, `", array_keys($data));
        $values = implode("', '", array_values($data));

        $sql = "INSERT INTO `$table`(`$columns`) VALUES ('$values')";
        $result = $this->conn->query($sql);
        return $result ? true : false;
    }

    public function update($table, $data, $id)
    {
        $pairs = [];
        foreach ($data as $key => $value) {
            array_push($pairs, "`" . $key . "` = '" . $value . "'");
        }
        $pairs = implode(",", $pairs);

        $sql = "UPDATE `$table` SET $pairs WHERE `id` = $id";
        $result = $this->conn->query($sql);
        return $result ? true : false;
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM `$table` WHERE `id` = $id";
        $result = $this->conn->query($sql);
        return $result ? true : false;
    }
}

$database = new Database();

