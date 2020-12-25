<?php 
    class PostController {
        public function getPost($conn) {
            require_once("./models/post_model.php");
            $postModel= new PostModel();
            $posts = $postModel->getModel($conn);

            require_once("./views/post_view.php");
            $postView = new PostView();
            $postView->showAllPost($posts);
        }

        public function getDetailPost($conn, $id_post) {
            require_once("./models/post_model.php");
            $postModel= new PostModel();
            $detail_post = $postModel->getModelDetailPost($conn, $id_post);

            require_once("./views/detail_post_view.php");
            $detailPostView = new DetailPostView();
            $detailPostView->showDetailPost($detail_post);
        }
    }
?>