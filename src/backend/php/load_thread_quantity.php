<?php
    require_once 'config.php';

    $category = $_GET['category'];

    if ($category == "all") {
        $sql = "SELECT SUM(category_threads_number) AS category_threads_number FROM thread_category";
        $stmt = $con->prepare($sql);
    } else {
        $sql = "SELECT category_threads_number FROM thread_category WHERE category_url = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $category);
    }
    
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $category_threads_number = $row['category_threads_number'];
    }
?>