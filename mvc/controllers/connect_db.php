<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database_intern = 'intern_php';
    $conn = new mysqli($servername, $username, $password);
    if(!$conn){
        die("Connection failed: " .$conn->connect_error());
    }
    $sql_create_db = 'create database '.$database_intern;
    if ($conn->query($sql_create_db)){
        echo "Database created successfully!";
    }
    $conn->set_charset('UTF-8');
    $conn->close();

    $conn_db = new mysqli($servername, $username, $password, $database_intern);
    if($conn_db){
        $sql = "CREATE TABLE db_posts (
            id INT(6) AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            description text,
            image VARCHAR(255),
            status INT,
            create_at datetime,
            update_at datetime
            )";

        if ($conn_db->query($sql) === TRUE) {
            echo "Table db_post created successfully";
        }
    }
    else {
        die("Connection failed: " .$conn_db->connect_error());
    }
    // create database and create db_posts
?>
