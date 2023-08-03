<?php

class Database {
    private $server = "localhost";
    private $username = "root";
    private $password = ""; //MAMP, "root"
    private $db_name = "the_company";

    protected $conn; //connection

    public function __construct(){
        //open connection
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to database ".$this->db_name.": ".$this->conn->connect_error);
        }
    }
}