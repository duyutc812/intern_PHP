<?php 
    class PostController {
        public function getPost($conn) {
            require_once("./models/post_model.php");
            $postModel= new PostModel();
            $posts = $postModel->getModel($conn);

            require_once("./views/post_view.php");
            $postView = new PostView();
            $postView->showAllPost($conn, $posts);
        }
    }
?>