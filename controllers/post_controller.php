<?php 
    require_once("./models/post_model.php");
    class PostController {
        public function getPost($conn) {
            $postModel= new PostModel();
            $posts = $postModel->getModel($conn);

            require_once("./views/post_view.php");
            $postView = new PostView();
            $postView->showAllPost($posts);
        }
        public function getDetailPost($conn, $id_post) {
            $postModel= new PostModel();
            $detail_post = $postModel->getModelDetailPost($conn, $id_post);
            require_once("./views/detail_post_view.php");
            $detailPostView = new DetailPostView();
            $detailPostView->showDetailPost($detail_post);
        }

        public function getAllPostAdmin($conn) {
            $postModel= new PostModel();
            $posts = $postModel->getModel($conn);
            require_once("./views/post_view_admin.php");
            $postView = new PostViewAdmin();
            $postView->showAllPostAdmin($posts);
        }

        public function setPostAdmin($conn, $id_post) {
            $postModel= new PostModel();
            $posts = $postModel->getModelDetailPost($conn, $id_post);
            require_once("./views/set_post_view.php");
            $postView = new SetPost();
            $postView->showPost($posts);
        }
    }
?>