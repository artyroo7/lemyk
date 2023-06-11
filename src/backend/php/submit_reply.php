<?php
require_once 'config.php';

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if reply text and parent comment id are set
    if(isset($_POST['replyText']) && !empty($_POST['replyText']) && isset($_POST['parentCommentId']) && !empty($_POST['parentCommentId'])) {
        $replyText = $_POST['replyText'];
        $threadId = $_POST['threadId'];
        $parentCommentId = $_POST['parentCommentId'];
        $comment_date = date('Y-m-d H:i:s');

        // Check if image is uploaded
        if(isset($_FILES['commentImage']) && $_FILES['commentImage']['error'] != UPLOAD_ERR_NO_FILE) {
            $imageName = $_FILES['commentImage']['name'];
            $imageTmpName = $_FILES['commentImage']['tmp_name'];
            $imageSize = $_FILES['commentImage']['size'];
            $imageError = $_FILES['commentImage']['error'];
            $imageType = $_FILES['commentImage']['type'];

            // Get image file type extension (jpg, png, jpeg)
            $imageExt = explode('.', $imageName);
            $imageActualExt = strtolower(end($imageExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($imageActualExt, $allowed)) {
                if ($imageError === 0) {
                    if ($imageSize < 5000000) { // Image size less than 5MB

                        // Save image to a directory in your server
                        // Make sure to set the correct path here
                        $imageNameNew = uniqid('', true).".".$imageActualExt;
                        $imageDestination = '../../../uploads/images/comments/'.$imageNameNew;
                        move_uploaded_file($imageTmpName, $imageDestination);

                        // Prepare SQL statement
                        $sql = "INSERT INTO thread_comment (thread_id, comment_text, comment_reply_id, comment_date) VALUES (?, ?, ?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param('isis', $threadId, $replyText, $parentCommentId, $comment_date);

                        $stmt->execute();

                        $sql = "SELECT * FROM thread_comment ORDER BY comment_id desc LIMIT 1"; 
                        $result = mysqli_query($con,$sql);

                        // Loop through each thread and display it
                        if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_assoc($result);
                          $commentId = $row['comment_id'];

                            // Save image name to database
                          $sql = "INSERT INTO thread_comment_images (comment_id, image_name) VALUES (?, ?)";
                          $stmt = $con->prepare($sql);
                          $stmt->bind_param('is', $commentId, $imageNameNew);

                          if($stmt->execute()) {
                              echo json_encode(array('success' => 'Зображення успішно завантажено!'));
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
        } else {
            // If no image uploaded, then proceed to save the comment

            // Prepare SQL statement
            $sql = "INSERT INTO thread_comment (thread_id, comment_text, comment_reply_id, comment_date) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('isis', $threadId, $replyText, $parentCommentId, $comment_date);

            $stmt->execute();

            echo json_encode(array('success' => 'Успішно.'));
        }
            $sql = "UPDATE thread_info SET thread_comments_number = thread_comments_number + 1 WHERE thread_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('i', $threadId);
            $stmt->execute();
    } else {
        echo json_encode(array('error' => 'Необхідний текст для коментаря.'));
        exit();
    }
}
?>