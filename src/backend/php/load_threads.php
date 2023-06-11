<?php
    include 'functions.php';

    require_once 'config.php'; 

    $category = $_GET['category'];

    if ($category == "all") {
        $sql = "SELECT * FROM thread_info";
        $stmt = $con->prepare($sql);
    } else {
        $sql = "SELECT * FROM thread_info WHERE category_id = (SELECT category_id FROM thread_category WHERE category_url = ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $category);
    }

    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $count_query = "SELECT count(*) as allcount FROM thread_info";
        $count_result = mysqli_query($con,$count_query);
        $count_fetch = mysqli_fetch_array($count_result);
        $postCount = $count_fetch['allcount'];
        $limit_threads = 10;

        $sql = "SELECT * FROM thread_info ORDER BY thread_id asc LIMIT 0,".$limit_threads; 
        $result = mysqli_query($con,$sql);

        // Loop through each thread and display it
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $thread_id = $row['thread_id'];
                $thread_name = $row['thread_name'];
                $thread_body = $row['thread_body'];
                $thread_comment = $row['thread_comments_number'];
                $thread_views = $row['thread_views'];
                $thread_date = $row['thread_date'];
                $thread_shortened_body = mb_substr($thread_body, 0, 300);
                $thread_date = $row['thread_date'];
                $time_elapsed = time_elapsed_string($thread_date);
                if(mb_strlen($thread_body) > 300){
                    $thread_shortened_body .= '...';
                }
                $random_number = rand(1000,4000);

                echo '<div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
            <div class="votes text-center votes-2">
                <div class="answer-block answered-accepted my-2">
                    <span class="answer-counts d-block lh-20 fw-medium">'.$thread_comment.'</span>
                    <span class="answer-text d-block fs-13 lh-18">коментів</span>
                </div>
                <div class="view-block">
                    <span class="view-counts d-block lh-20 fw-medium">'.$thread_views.'</span>
                    <span class="view-text d-block fs-13 lh-18">переглядів</span>
                </div>
            </div>
            <div class="media-body">
                <h5 class="mb-2 fw-medium"><a href="thread.php?category='.$category.'&id='.$thread_id.'">'.$thread_name.'</a></h5>
                <p class="mb-2 truncate lh-20 fs-15">'.$thread_shortened_body.'.</p>
                <!--<div class="tags">
                    <a href="#" class="tag-link">javascript</a>
                    <a href="#" class="tag-link">bootstrap-4</a>
                    <a href="#" class="tag-link">jquery</a>
                    <a href="#" class="tag-link">select</a>
                </div>-->
                <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                    ';

                    for ($i = 0; $i < $row['thread_body_images_quantity']; $i++) {    
                        echo '<a href="user-profile.html" class="media-img d-block">
                            <img src="images/img3.jpg" alt="avatar">
                        </a>';
                    }

                echo '<div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                            <h5 class="pb-1"><a>Анонім №'.$random_number.'</a></h5>
                            <!--<div class="stats fs-12 d-flex align-items-center lh-18">
                                <span class="text-black pr-2" title="Reputation score">224</span>
                                <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                            </div>-->
                        </div>
                        <small class="meta d-block text-right">
                            <span class="text-black d-block lh-18">створенний</span>
                            <span class="d-block lh-18 fs-12">'.$time_elapsed.'</span>
                        </small>
                    </div>
                </div>
            </div>
        </div><!-- end media -->';
            }
        } else {
            echo "<p>No threads found</p>";
        }
    } else {
      echo '<div class="div-centered-o"><h5 style="padding: 70px; text-align: center;">0 тредів у цій категорії</h5></div>';
    }
    $stmt->close();
    $con->close();
?>