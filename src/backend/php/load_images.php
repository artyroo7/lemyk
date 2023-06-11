<?php
    require_once 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT image_name FROM thread_images WHERE thread_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $id);

    $stmt->execute();

    $result = $stmt->get_result();
    $thread_images = array();
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-lg-6">
                        <a href="uploads/images/threads/'.$row['image_name'].'" class="gallery-item overflow-hidden mb-4" data-fancybox="gallery">
                            <img class="lazy" src="uploads/images/threads/'.$row['image_name'].'" data-src="uploads/images/threads/'.$row['image_name'].'" alt="review image">
                        </a>
                    </div>
                 ';
        }
    }