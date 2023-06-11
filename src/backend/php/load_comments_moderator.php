<?php
    require_once 'config.php';

    include 'functions.php';
    include 'count_views.php';

    // Fetch all comments
    $sql = "SELECT * FROM thread_comment";
    $stmt = $con->prepare($sql);

    $stmt->execute();

    $comments_result = $stmt->get_result();

    echo '<h5 class="pb-3 fs-20">Всі коментарі:</h5>
                        <ul class="comments-list pt-3" id="comments">';

    while($comment = $comments_result->fetch_assoc()) {
        $random_number = rand(1000,4000);
        $comment_id = $comment['comment_id'];
        $comment_date = $comment['comment_date'];
        $time_elapsed = time_elapsed_string($comment_date);
        echo '<li class="mb-3" data-comment-id="'.$comment_id.'" id="'.$comment_id.'">
                        <div class="comment-avatar">
                        <img class="lazy" src="images/anonymous-user.png" data-src="../../../images/anonymous-user.png" alt="avatar">
                        </div>
                        <div class="comment-body pt-0">
                        <span class="comment-user text-black">Анонім №'.$random_number.'</span>
                        <span class="comment-separated">-</span>
                        <span class="comment-date text-gray">Коментар ID: '.$comment_id.', </span>
                        <span class="comment-date text-gray">'.$time_elapsed.'</span>';

        if ($comment['comment_reply_id'] != 0)
        {
            echo '<p class="comment-text pt-1 pb-2 lh-22"><a href="#'.$comment['comment_reply_id'].'">>>'.$comment['comment_reply_id'].'</a> '.$comment['comment_text'].'</p>';
        } else {
            echo '<p class="comment-text pt-1 pb-2 lh-22">'.$comment['comment_text'].'</p>';
        }

        // Fetch images related to this comment
        $sql = "SELECT * FROM thread_comment_images WHERE comment_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $comment_id);

        $stmt->execute();
        $images_result = $stmt->get_result();  

        if($images_result->num_rows > 0) {
            while($image = $images_result->fetch_assoc()) {
                echo '<div class="col-lg-13">
                            <a href="../../../uploads/images/comments/'.$image['image_name'].'" class="gallery-item overflow-hidden mb-4" data-fancybox="gallery">
                                <img class="lazy" src="../../../uploads/images/comments/'.$image['image_name'].'" data-src="../../../uploads/images/comments/'.$image['image_name'].'" alt="review image">
                            </a>
                        </div>
                     ';
            }

        }
        echo '<a href="#" class="comment-reply text-color hover-underline" data-toggle="modal" data-target="#reportModal"><i class="la la-flag mr-1"></i>Скарга</a>';
        echo '<a href="#" style="margin-left: 10px;" class="comment-reply text-color hover-underline" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i>Відповісти</a></div></li>';
    }
    echo '</ul>';
?>
