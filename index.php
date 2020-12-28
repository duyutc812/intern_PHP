<!DOCTYPE html>
<html>
<head>
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
                            case 'show':
                                if (isset($_GET['id'])) {
                                    $action = $_GET['action'];
                                    $id_post = $_GET['id'];
                                    $postController->editPostAdmin($id_post);
                                }
                                break;
                            case 'add':
                                $postController->addPostAdmin();
                                break;
                            default:
                                echo "admin";
                                break;
                        }
                    }
                    else {
                        $postController->getAllPostAdmin();
                    }
                    break;
                default:
                    echo "default";
                    break;
        
            }
        }
            //         }
            //        
            //     
        else {
            $postController->getPost();
        }

    ?>
</body>
</html>