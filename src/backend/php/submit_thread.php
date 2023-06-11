<?php

require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $thread_comments_number = 0;
    $thread_views = 0;
    
    $errors = [];

    // Validate inputs
    if (empty($title)) {
        echo json_encode(array('error' => 'Необхідно вказати назву для треду.'));
        exit();
    }

    if (empty($category)) {
        echo json_encode(array('error' => 'Необхідно вказати категорію.'));
        exit();
    }

    if (empty($description)) {
        echo json_encode(array('error' => 'Потрібен опис треду.'));
        exit();
    }

    $thread_date = date('Y-m-d H:i:s');

    // Check if files are uploaded
    if ((isset($_FILES['commentImage'])) && ($_FILES['commentImage']['error'][0] != UPLOAD_ERR_NO_FILE)) {
        // Prepare a statement and bind parameters to prevent SQL injection
        $sql = "INSERT INTO thread_info (category_id, thread_name, thread_body, thread_comments_number, thread_views, thread_date) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('issiis', $category, $title, $description, $thread_comments_number, $thread_views, $thread_date);

        // Execute the query
        $stmt->execute();

        for ($i = 0; $i < count($_FILES['commentImage']['name']); $i++) {
            $fileName = $_FILES['commentImage']['name'][$i];
            $fileTmpName = $_FILES['commentImage']['tmp_name'][$i];
            $fileSize = $_FILES['commentImage']['size'][$i];
            $fileError = $_FILES['commentImage']['error'][$i];
            $fileType = $_FILES['commentImage']['type'][$i];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = ['jpg', 'jpeg', 'png'];

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 5000000) { // File size less than 5MB
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = '../../../uploads/images/threads/'.$fileNameNew;
                        $thread_comments_number = 0;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $sql = "SELECT * FROM thread_info ORDER BY thread_id desc LIMIT 1"; 
                        $result = mysqli_query($con,$sql);

                        // Loop through each thread and display it
                        if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_assoc($result);
                          $threadId = $row['thread_id'];

                            // Save image name to database
                          $sql = "INSERT INTO thread_images (thread_id, image_name) VALUES (?, ?)";
                          $stmt = $con->prepare($sql);
                          $stmt->bind_param('is', $threadId, $fileNameNew);

                          if($stmt->execute()) {
                              $sql = "UPDATE thread_category SET category_threads_number = category_threads_number + 1 WHERE category_id = ?";
                              $stmt = $con->prepare($sql);
                              $stmt->bind_param('i', $category);
                              $stmt->execute();
                          } else {
                              echo json_encode(array('error' => 'Помилка завантаження зображення.'));
                              exit();
                          }
                        } else {
                            echo json_encode(array('error' => 'Сталася помилка, спробуйте пізніше.'));
                            exit();
                        }
                    } else {
                        echo json_encode(array('error' => 'Ваш файл завеликий!'));
                        exit();
                    }
                } else {
                    echo json_encode(array('error' => 'Під час завантаження файлу сталася помилка!'));
                    exit();
                }
            } else {
                echo json_encode(array('error' => 'Ви не можете завантажувати файли цього типу!'));
                exit();
            }
        }
    } else {
            // Prepare a statement and bind parameters to prevent SQL injection
            $sql = "INSERT INTO thread_info (category_id, thread_name, thread_body, thread_comments_number, thread_views, thread_date) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('issiis', $category, $title, $description, $thread_comments_number, $thread_views, $thread_date);

            // Execute the query
            $stmt->execute();

            $sql = "UPDATE thread_category SET category_threads_number = category_threads_number + 1 WHERE category_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('i', $category);
            $stmt->execute();

            echo json_encode(array('success' => 'Успішно.'));
        }

}