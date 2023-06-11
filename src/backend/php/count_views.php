<?php
$sql = "UPDATE thread_info SET thread_views = thread_views + 1 WHERE thread_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
?>