<!DOCTYPE html>
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
<body>
    <?php
        include ('./mvc/controllers/connect_db.php');
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'details':
                    include('./mvc/views/detail_post.php');
                    break;
                default:
                    # code...
                    break;
            }
        }
        else
        {
            include_once('./mvc/views/list_post.php');
        }
    ?>
</body>
</html>