<?php 
    class PostModel extends Database {
        protected $db;
        public $title;
        public $description;
        public $image;
        public $status;
        public $create_at;
        public $update_at;

        public function __construct() {
            $this->db = new Database();
            $this->db->connect();
        }

        // get all post
        public function getAllPost() {
            $result = $this->db->conn->query($this->db->sql_getPost());
            return $result;
        }

        // get detail post
        public function getDetailPost($id_post) {
            $result = $this->db->conn->query($this->db->sql_getDetailPost($id_post));
            return $result;
        }

        // add post
        public function addPost($title, $description, $image, $status) {
            $this->create_at = date('Y-m-d H-i-s');
            $this->update_at = date('Y-m-d H-i-s');
            if ($this->db->conn->query($this->db->sql_addPost($title, $description, $image, $status, $this->create_at, $this->update_at))) {
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result add!");
            }

        }

        // update post
        public function updatePost($id_post, $title, $description, $image, $status) {
            $this->update_at = date('Y-m-d H-i-s');
            if ($this->db->conn->query($this->db->sql_updatePost($id_post, $title, $description, $image, $status, $this->update_at))) {
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result update!");
            }
        }

        // delete post
        public function delPost($id_post) {
            if ($this->db->conn->query($this->db->sql_deletePost($id_post))) {
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result delete!");
            }
        }

        // Post - Paginator
        public function postNavigation($key_onPage, $rec_onPage) {
            $result = $this->db->conn->query($this->db->sql_postPaginator($key_onPage, $rec_onPage));
            return $result;
        }

        // insert data
        public function insertData() {
            $this->create_at = date('Y-m-d H-i-s');
            $this->update_at = date('Y-m-d H-i-s');
            if ($this->db->conn->query($this->db->insertDataPost($this->create_at, $this->update_at))) {
                header('Location: http://localhost/intern_PHP/');
            }
            else {
                die("no result insert!");
            }
        }
    }
?>
