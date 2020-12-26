<?php 
    class PostModel extends Database {
        protected $db;

        public function __construct() {
            $this->db = new Database();
            $this->db->connect();
        }

        public function getAllPost() {
            $sql = "SELECT * FROM db_posts";
            $result = $this->db->conn->query($sql);
            return $result;
        }

        public function getDetailPost($id_post) {
            $sql = "SELECT * FROM db_posts WHERE id = $id_post";
            $result = $this->db->conn->query($sql);
            return $result;
        }

        public function addPost() {
            // $title, $description, $image, $status, $create_at, $update_at
            $city = "'s Hertogenbosch";
            $city = $this->db->conn->real_escape_string($city);
            echo $city;
        }

    }
?>
