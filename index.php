<?php   
    require_once('./connection.php');
    $connectDB = new ConnectDB();
    $conn = $connectDB->connectDB();

    require_once('./controllers/post_controller.php');
    $postController = new PostController();
    $postController->getPost($conn);
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>
   th {
    text-align: center;
   }
</style>
<body> -->
<!-- </body>
</html> -->