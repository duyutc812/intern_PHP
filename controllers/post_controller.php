<?php 
    require_once("./models/post_model.php");

    class PostController {
        protected $postModel;

        public function __construct() {
            $this->postModel = new PostModel();
        }

        public function getPost() {
            $posts = $this->postModel->getAllPost();

            require_once("./views/post_view.php");
            $postView = new PostView();
            $postView->showAllPost($posts);
        }

        public function getDetailPost($id_post) {
            $detail_post = $this->postModel->getDetailPost($id_post);
            require_once("./views/detail_post_view.php");
            $detailPostView = new DetailPostView();
            $detailPostView->showDetailPost($detail_post);
        }

        public function getAllPostAdmin() {
            $posts = $this->postModel->getAllPost();
            require_once("./views/post_view_admin.php");
            $postView = new PostViewAdmin();
            $postView->showAllPostAdmin($posts);
        }

        public function editPostAdmin($id_post) {
            $posts = $this->postModel->getDetailPost($id_post);
            require_once("./views/set_post_view.php");
            $postView = new SetPost();
            if (isset($_POST['smb'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                if ($_POST['image']) {
                    $image = $_POST['image'];
                } else $image = $posts->fetch_assoc()['image'];
                $status = $_POST['status'];
                $this->postModel->updatePost($id_post, $title, $description, $image, $status);
            }
            $postView->showPost($posts);
        }

        public function addPostAdmin() {
            require_once("./views/add_post_view.php");
            $addView = new AddPost();
            if (isset($_POST['smb'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $image = $_POST['image'];
                $status = $_POST['status'];
                $this->postModel->addPost($title, $description, $image, $status);
            }
            $addView->addPost();
        }
    }
?>