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
            $sql = "SELECT * FROM db_posts";
            $result = $this->db->conn->query($sql);
            return $result;
        }

        // get detail post 
        public function getDetailPost($id_post) {
            $sql = "SELECT * FROM db_posts WHERE id = $id_post";
            $result = $this->db->conn->query($sql);
            return $result;
        }

        // add post
        public function addPost($title, $description, $image, $status) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->status = $status;
            $this->create_at = date('Y-m-d H-i-s');
            $this->update_at = date('Y-m-d H-i-s');
            $sql = "INSERT INTO db_posts VALUES('', '$this->title', '$this->description', '$this->image', '$this->status', '$this->create_at', '$this->update_at')";
            if ($this->db->conn->query($sql)) {
                header('location:../intern_PHP/admin');
            }
            else {
                die("no result add!");
            }

        }


        // update post
        public function updatePost($id_post, $title, $description, $image, $status) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->status = $status;
            $this->update_at = date('Y-m-d H-i-s');
            $sql = "UPDATE db_posts set title = '$this->title', description = '$this->description', image = '$this->image', status = '$this->status', update_at = '$this->update_at' WHERE id = $id_post;
            ";
            if ($this->db->conn->query($sql)) {
                header('location:../intern_PHP/admin');
            }
            else {
                die("no result update!");
            }
        }

        // delete post
        public function delPost($id_post) {
            $sql = "DELETE FROM db_posts WHERE id = $id_post";
            if ($this->db->conn->query($sql)) {
                header('location:../intern_PHP/admin');
            }
            else {
                die("no result delete!");
            }
        }

        // Post - Paginator
        public function postNavigation($key_onPage, $rec_onPage) {
            $sql = "SELECT * FROM db_posts ORDER BY id ASC LIMIT $key_onPage, $rec_onPage";
            $result = $this->db->conn->query($sql);
            return $result;
        }

        // insert data
        public function insertData() {
            $this->create_at = date('Y-m-d H-i-s');
            $this->update_at = date('Y-m-d H-i-s');
            $sql = "INSERT into db_posts VALUES ('', 'title1', 'description1', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title2', 'description2', 'abc.jpg', 2, '$this->create_at', '$this->update_at'), 
                                                ('', 'title3', 'description3', 'abc.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title4', 'description4', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title5', 'description5', 'image.jpg', 2, '$this->create_at', '$this->update_at'), 
                                                ('', 'title6', 'description6', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title7', 'description7', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title8', 'description8', 'abc.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title9', 'description9', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title10', 'description10', 'image.jpg', 1, '$this->create_at', '$this->update_at'), 
                                                ('', 'title11', 'description11', 'image.jpg', 1, '$this->create_at', '$this->update_at')";
            if ($this->db->conn->query($sql)) {
                header('location:../intern_PHP/');
            }
            else {
                die("no result insert!");
            }
        }
    }
?>
