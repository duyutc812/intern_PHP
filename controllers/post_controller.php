<?php 
    require_once("./models/post_model.php");

    class PostController {
        protected $postModel;
        public function __construct() {
            $this->postModel = new PostModel();
        }

        // list post customer
        public function getPost() {
            $posts = $this->postModel->getAllPost();

            require_once("./views/post_view.php");
            $postView = new PostView();
            $postView->showAllPost($posts);
        } 

        // detail post customer
        public function getDetailPost($id_post) {
            $detail_post = $this->postModel->getDetailPost($id_post);
            require_once("./views/detail_post_view.php");
            $detailPostView = new DetailPostView();
            $detailPostView->showDetailPost($detail_post);
        }

        // list post Admin
        public function getAllPostAdmin() {
            $posts = $this->postModel->getAllPost();
            require_once("./views/post_view_admin.php");
            $postView = new PostViewAdmin();
            // if (isset($_POST['smb'])) {
            //      if(isset($_POST['post_page'])) {
            //     $rec_onPage = $_POST['post_page'];
            //     switch ($rec_onPage) {
            //         case 5:
            //             $rec_onPage = 5;
            //             break;
            //         case 10:
            //             $rec_onPage = 10;
            //             break;
            //         case 50:
            //             $rec_onPage = 50;
            //             break;
            //         case 'all':
            //             $rec_onPage = 100;
            //         default:
            //             # code...
            //             break;
            //     }
            //     }
            // }
            // else {
            //         $rec_onPage = 5;
            //     }
            $rec_onPage = 5;

            //Paginator
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            else {
                $page = 1;
            }
            $key_onPage = ($page - 1) * $rec_onPage;
            $total_page = ceil($posts->num_rows / $rec_onPage);
            $page_navigation = '';
            $page_prev = $page - 1;
            if($page_prev <= 0) {
                $page_prev = 1;
            }
            // prev page
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
            # next page
            $page_next = $page + 1;
            if($page_next >= $total_page) {
                $page_next = $total_page;
            }
            $page_navigation .= '<li class="page-item"><a class="page-link" href="index.php?controller=admin&page='.$page_next.'">&raquo;</a></li>';
            $postView->showAllPostAdmin($this->postModel->postNavigation($key_onPage, $rec_onPage), $page_navigation);
        }

        // edit post Admin
        public function editPostAdmin($id_post) {
            $posts = $this->postModel->getDetailPost($id_post);
            require_once("./views/edit_post_view.php");
            $postView = new SetPost();
            // echo getcwd();
            if (isset($_POST['smb'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $status = $_POST['status'];
                if ($_FILES['image']['name']) {
                    $image = basename($_FILES['image']['name']);
                    // echo var_dump($_FILES['image']['size']);
                    $temp_name = $_FILES['image']['tmp_name'];
                    $folder = "assets/img/". $image;
                    // echo var_dump(copy($temp_name, $folder));
                    echo var_dump(move_uploaded_file($temp_name, $folder));
                } else {
                    $image = $posts->fetch_assoc()['image'];
                }
                $this->postModel->updatePost($id_post, $title, $description, $image, $status);
            }
            $postView->editPost($posts);
        }

        // add post Admin
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

        //delete post Admin
        public function deletePostAdmin($id_post) {
            $this->postModel->delPost($id_post);
        }
    }
?>