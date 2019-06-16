<?php
class Database{

    public  $host = 'localhost';
    public  $user = 'root';
    public  $pass = '';
    public  $db = 'shopping';
    public $conn;

    /**
     * Phương thức khởi tạo
     *
     * Databasr cóntructor
     */
    public function __construct()
    {
        $this->conn = $this->connDatabase();
    }

    /**
     * Phương thức kết nối đến CSDL
     *
     */
    public function connDatabase(){
        $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        return $conn;
    }

    /**Phương thức chạy câu truy vẫn SQL
     * @param $sql
     * @return array
     */
    public function runQuery($sql){
        $data = array();
        $result= mysqli_query($this->conn,$sql);

        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;

    }

    /**
     * Phương thức đến số bản ghi trong câu lênh query
     * @param $sql
     * @return int
     */
    public function numRow($sql){
        $result = mysqli_query($this->conn,$sql);
        $count = mysqli_num_rows($result);
        return $count;

    }


}