<?php 
    class Database {
        public $conn = NULL;
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database_intern = 'intern_php';

        public function connect() {
            // connect
            $this->conn = new mysqli($this->servername, $this->username, $this->password);
            if(!$this->conn){
                die("Connection failed: " .$this->conn->connect_error());
            }
            //create database
            $sql_create_db = 'create database '.$this->database_intern;
            if ($this->conn->query($sql_create_db)){
                echo "Database created successfully!";
            }
            $this->conn->set_charset('UTF-8');
            //  create table
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database_intern);
            if($this->conn){
                $sql = "CREATE TABLE db_posts (
                    id INT(6) AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(255) NOT NULL,
                    description text,
                    image VARCHAR(255),
                    status INT,
                    create_at datetime,
                    update_at datetime
                    )";
                if ($this->conn->query($sql) === TRUE) {
                    echo "Table db_post created successfully";
                }
            }
            else {
                die("Connection failed: " .$this->conn->connect_error());
            }
        }

        // close
        public function closeDatabase() {
            if ($this->conn) {
                $this->conn.close();
            }
        }
    }
?>