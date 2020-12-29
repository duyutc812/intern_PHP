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
            if (isset($_POST['smb'])) {
                 if(isset($_POST['post_page'])) {
                $rec_onPage = $_POST['post_page'];
                switch ($rec_onPage) {
                    case 2:
                        $rec_onPage = 2;
                        break;
                    case 4:
                        $rec_onPage = 4;
                        break;
                    case 5:
                        $rec_onPage = 5;
                        break;
                    case 'all':
                        $rec_onPage = 100;
                    default:
                        # code...
                        break;
                }
                }
            }
            else {
                    $rec_onPage = 2;
                }
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            else {
                $page = 1;
            }
            // $rec_onPage = 4;
            $key_onPage = ($page - 1) * $rec_onPage;
            $total_page = ceil($posts->num_rows / $rec_onPage);
            $page_navigation = '';
            $page_prev = $page - 1;
            if($page_prev <= 0) {
                $page_prev = 1;
            }
            // prev 
            $page_navigation .= '<li class="page-item"><a class="page-link" href="index.php?controller=admin&page='.$page_prev.'">&laquo;</a></li>';
            for($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    $active = 'active';
                }
                else {
                    $active = '';
                }
            $page_navigation .= '<li class="page-item '.$active.'"><a class="page-link" href="index.php?controller=admin&page='.$i.'">'.$i.'</a></li>';
            }
            # next
            $page_next = $page + 1;
            if($page_next >= $total_page) {
                $page_next = $total_page;
            }
            $page_navigation .= '<li class="page-item"><a class="page-link" href="index.php?controller=admin&page='.$page_next.'">&raquo;</a></li>';
            $postView->showAllPostAdmin($this->postModel->postNavigation($key_onPage, $rec_onPage), $page_navigation);
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

        public function deletePostAdmin($id_post) {
            $this->postModel->delPost($id_post);
        }
    }
?>