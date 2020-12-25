<?php 
    class PostModel {
        public function getModel($conn) {
            $sql = "SELECT * FROM db_posts";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>
