<!DOCTYPE html>
<html>
<head>
    <base href="http://localhost/intern_PHP/"/>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/datepicker3.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-table.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
</head>
<style>
   th {
    text-align: center;
   }
</style>
<body>
    <?php
        require_once('./connection.php');
        $db = new Database();
        $db->connect();
        require_once('./controllers/post_controller.php');
        $postController = new PostController();
        if (isset($_GET['controller'])) {
            $controller = $_GET['controller'];
            switch ($controller) {
                case 'detail':
                    if (isset($_GET['id'])) {
                        $id_post = $_GET['id'];
                        $postController->getDetailPost($id_post);
                    break;
                    }
                case 'admin':
                    if (isset($_GET['action'])) {
                        switch ($_GET['action']) {
                            
                            // edit post - Admin
                            case 'edit':
                                if (isset($_GET['id'])) {
                                    $id_post = $_GET['id'];
                                    $postController->editPostAdmin($id_post);
                                }
                                break;

                            // add post - Admin
                            case 'add':
                                $postController->addPostAdmin();
                                break;

                            // delete post - Admin
                            case 'delete':
                                if (isset($_GET['id'])) {
                                    $id_post = $_GET['id'];
                                    $postController->deletePostAdmin($id_post);
                                }
                                break;
                            default:
                                ?>
                                <h1>404</h1>
                                <?php
                                break;
                        }
                    }
                    else {
                        $postController->getAllPostAdmin();
                    }
                    break;
                default:
                    ?>
                    <h1>404</h1>
                    <?php
                    break;
            }
        }
        else {
            $postController->getPost();
        }

    ?>
</body>
</html>