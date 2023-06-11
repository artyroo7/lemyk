<?php
    require_once 'config.php';

    $id = $_GET['id'];
    $category = $_GET['category'];

    $sql = "SELECT category_name FROM thread_category WHERE category_url = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $category);

    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $thread_category_name = $row['category_name'];
    }

    $sql = "SELECT * FROM thread_info WHERE thread_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $id);

    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $thread_name = $row['thread_name'];
        $thread_comments_number = $row['thread_comments_number'];
        $thread_date = $row['thread_date'];
        $thread_body = $row['thread_body'];
    }