<?php
// start a session if it's not already started
require_once 'config.php';

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // sanitize and validate inputs
    $threadId = filter_input(INPUT_POST, 'threadId', FILTER_SANITIZE_NUMBER_INT);
    $parentCommentId = filter_input(INPUT_POST, 'parentCommentId', FILTER_SANITIZE_NUMBER_INT);
    $reportReason = filter_input(INPUT_POST, 'reportReason', FILTER_SANITIZE_STRING);

    if ($threadId === false || $parentCommentId === false || $reportReason === false) {
        echo json_encode(array('error' => 'Недійсні введення.'));
        exit();
    }

    // Insert the report into the database
    $sql = "INSERT INTO moderator_report (thread_id, comment_id, report_reason) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("iis", $threadId, $parentCommentId, $reportReason);

    if ($stmt->execute()) {
        echo json_encode(array('success' => 'Скаргу успішно надіслано!'));
    } else {
        echo json_encode(array('error' => 'Під час подання скарги сталася помилка.'));
        exit();
    }
}