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
        $connectDB = new ConnectDB();
        $conn = $connectDB->connectDB();
        require_once('./controllers/post_controller.php');
        $postController = new PostController();
        // if (assert($_GET['page_layout'])) {
        //     $page_layout = $_GET['page_layout'];
        //     switch ($page_layout) {
        //         case 'detail_post':
        //             echo "detail post";
        //             if (assert($_GET['id'])) {
        //                 $id_post = $_GET['id'];
        //                 $postController->getDetailPost($conn, $id_post);
        //             }
        //             break;
        //         default:
        //             break;
        // }
        // else {
        //     $postController->getPost($conn);
        // }
        $postController->getPost($conn);
    }
    ?>
</body>
</html>