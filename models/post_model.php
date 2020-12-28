<?php 
    class PostModel extends Database {
        protected $db;
        public $title;
        public $description;
        public $image;
        public $status;
        public $create_at;
        public $update_at;
        public $id_post;

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

        public function addPost($title, $description, $image, $status) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->status = $status;
            $this->create_at = date('Y-m-d h-m-s');
            $this->update_at = date('Y-m-d h-m-s');
            $sql = "INSERT INTO db_posts VALUES('', '$this->title', '$this->description', '$this->image', '$this->status', '$this->create_at', '$this->update_at')";
            if ($this->db->conn->query($sql)) {
                header('location: index.php?controller=admin');
            }
            else {
                die("no result add!");
            }

        }

        public function updatePost($id_post, $title, $description, $image, $status) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->status = $status;
            $this->update_at = date('Y-m-d h-m-s');
            $this->id_post = $id_post;
            $sql = "UPDATE db_posts set title = '$this->title', description = '$this->description', image = '$this->image', status = '$this->status', update_at = '$this->update_at' WHERE id = '$id_post'
            ";
            if ($this->db->conn->query($sql)) {
                header('location: index.php?controller=admin');
            }
            else {
                die("no result add!");
            }

        }
    }
?>
