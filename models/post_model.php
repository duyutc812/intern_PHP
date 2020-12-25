<?php 
    class PostModel {
        public function getModel($conn) {
            $sql = "SELECT * FROM db_posts";
            $result = $conn->query($sql);
            return $result;
        }

        public function getModelDetailPost($conn, $id_post) {
            $sql = "SELECT * FROM db_posts WHERE id = $id_post";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>
