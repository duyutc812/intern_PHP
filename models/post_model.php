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
            $result = $this->db->sql_getPost(); 
            if ($result){
                return $result;
            }
            else {
                die("no result get post!");
            }
        }

        // get detail post
        public function getDetailPost($id_post) {
            $result = $this->db->sql_getDetailPost($id_post);
            if ($result){
                return $result;
            }
            else {
                die("no result get detail post!");
            }
        }

        // add post
        public function addPost($title, $description, $image, $status) {
            $result = $this->db->sql_addPost($title, $description, $image, $status) ;
            if ($result){
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result add!");
            }
        }

        // update post
        public function updatePost($id_post, $title, $description, $image, $status) {
            $result = $this->db->sql_updatePost($id_post, $title, $description, $image, $status);
            if ($result) {
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result update!");
            }
        }

        // delete post
        public function delPost($id_post) {
            $result = $this->db->sql_deletePost($id_post);
            if ($result){
                header('Location: http://localhost/intern_PHP/admin');
            }
            else {
                die("no result delete!");
            }
        }

        // Post - Paginator
        public function postNavigation($key_onPage, $rec_onPage) {
            $result = $this->db->sql_postPaginator($key_onPage, $rec_onPage);
            return $result;
        }

        // insert data
        public function insertData() {
            $result = $this->db->insertDataPost();
            // echo var_dump($result);
            if ($result) {
                header('Location: http://localhost/intern_PHP/');
            }
            else {
                die("no result insert!");
            }
        }
    }
?>
