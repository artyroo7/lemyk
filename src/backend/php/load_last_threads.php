<?php
    require_once 'config.php'; 

    $id = $_GET['id'];
    $category = $_GET['category'];

    $sql = "SELECT * FROM thread_info WHERE thread_id != $id AND category_id = (SELECT category_id FROM thread_category WHERE category_url = ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $category);

    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $count_query = "SELECT count(*) as allcount FROM thread_info";
        $count_result = mysqli_query($con,$count_query);
        $count_fetch = mysqli_fetch_array($count_result);
        $postCount = $count_fetch['allcount'];
        $limit_threads = 3;

        $sql = "SELECT * FROM thread_info ORDER BY thread_id desc LIMIT 0,".$limit_threads; 
        $result = mysqli_query($con,$sql);

        // Loop through each thread and display it
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $thread_id = $row['thread_id'];
                $thread_name = $row['thread_name'];
                $thread_body = $row['thread_body'];
                $thread_comment = $row['thread_comments_number'];
                $thread_date = $row['thread_date'];
                $thread_shortened_body = mb_substr($thread_body, 0, 300);
                if(mb_strlen($thread_body) > 300){
                    $thread_shortened_body .= '...';
                }
                $random_number = rand(1000,4000);

                echo '<div class="col-lg-4">
                            <div class="card card-item hover-y">
                                <div class="card-body pt-0">
                                    <a href="threads.php?category='.$category.'" class="card-link">'.$thread_category_name.'</a>
                                    <h5 class="card-title fw-medium"><a href="thread.php?category='.$category.'&id='.$thread_id.'">'.$thread_name.'</a></h5>
                                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                        <div class="media-body">
                                            <h5 class="fs-14 fw-medium">Створив: <a href="#">Анонім №'.$random_number.'</a></h5>
                                            <small class="meta d-block lh-20">
                                                <span>'.$thread_date.'</span>
                                            </small>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->';
            }
        } else {
            echo "<p>Тредів не знайдено</p>";
        }
    } else {
      echo '<div class="div-centered-o"><h5 style="padding: 70px; text-align: center;">0 тредів у цій категорії</h5></div>';
    }
    $stmt->close();
    $con->close();
?>