<?php 
    class Database {
        public $conn = NULL;
        private $server_name = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database_intern = 'intern_php';

        public function connect() {
            // connect
            $this->conn = new mysqli($this->server_name, $this->username, $this->password);
            if(!$this->conn){
                die("Connection failed: " .$this->conn->connect_error());
            }
            //create database
            $db_selected = mysqli_select_db($this->conn, $this->database_intern);
            // check database exists
            if (!$db_selected) {
                $sql_create_db = 'create database '.$this->database_intern;
                $this->conn->query($sql_create_db);
                $this->conn->set_charset('UTF-8');
            }
             // create table
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            // check table exists
            $table_exists = $this->conn->query("SELECT * FROM db_post");
            if($table_exists == FALSE)
            {
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
        }

        // // close
        // public function closeDatabase() {
        //     if ($this->conn) {
        //         $this->conn->close();
        //     }
        // }

        public function sql_getPost() {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $sqlGetPost = "SELECT * FROM db_posts";
            $result = $this->conn->query($sqlGetPost);
            return $result;
        }

        public function sql_getDetailPost($id_post) {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $sqlGetDetailPost = "SELECT * FROM db_posts WHERE id = $id_post";
            $result = $this->conn->query($sqlGetDetailPost);
            return $result;
        }

        public function sql_addPost($title, $description, $image, $status) {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $create_at = date('Y-m-d H-i-s');
            $update_at = date('Y-m-d H-i-s');
            $sqlAddPost = "INSERT INTO db_posts VALUES(NULL, '$title', '$description', '$image', '$status', '$create_at', '$update_at')";
            $result = $this->conn->query($sqlAddPost);
            return $result;
        }

        public function sql_updatePost($id_post, $title, $description, $image, $status) {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $update_at = date('Y-m-d H-i-s');
            $sqlUpdatePost = "UPDATE db_posts set title = '$title', description = '$description', image = '$image', status = '$status', update_at = '$update_at' WHERE id = $id_post;
            ";
            $result = $this->conn->query($sqlUpdatePost);
            return $result;
        }

        public function sql_deletePost($id_post) {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $sqlDeletePost = "DELETE FROM db_posts WHERE id = $id_post";
            $result = $this->conn->query($sqlDeletePost);
            return $result;
        }

        public function sql_postPaginator($key_onPage, $rec_onPage) {
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            $sqlPostPaginator = "SELECT * FROM db_posts ORDER BY id ASC LIMIT $key_onPage, $rec_onPage";
            $result = $this->conn->query($sqlPostPaginator);
            return $result;
        }

        public function insertDataPost() {
            $create_at = date('Y-m-d H-i-s');
            $update_at = date('Y-m-d H-i-s');
            $sqlInsertData = "INSERT into db_posts VALUES (NULL, 'title1', 'description1', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title2', 'description2', 'abc.jpg', 2, '$create_at', '$update_at'), 
                                                (NULL, 'title3', 'description3', 'abc.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title4', 'description4', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title5', 'description5', 'image.jpg', 2, '$create_at', '$update_at'), 
                                                (NULL, 'title6', 'description6', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title7', 'description7', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title8', 'description8', 'abc.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title9', 'description9', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title10', 'description10', 'image.jpg', 1, '$create_at', '$update_at'), 
                                                (NULL, 'title11', 'description11', 'image.jpg', 1, '$create_at', '$update_at')";
            // $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->database_intern);
            
            $check = $this->conn->query($sqlInsertData);
            return $check;
        }

    }
?>