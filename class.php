<?php
include "database.php";
class _main_ extends database
{
    public function __construct()
    {
        $this->connect();
    }

    public function InsertData($data)
    {
        if (empty($data)) {
            die('{"result":"failed"}');
        } else {
            $query = $this->db->prepare("INSERT INTO data_table (name, age) VALUES ('$data', 28)");
            $query->execute();

            die('{"result":"success"}');
        }
    }

    public function GetData()
    {
        $query = $this->db->prepare("SELECT * FROM data_table LIMIT 1");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (isset($result)) {
            $data = $result["name"];
            die('{"result":"success", "name":"' . $data . '"}');
        } else {
            die('{"result":"failed"}');
        }
    }
}