<?php
require_once 'config.php';

$sql = "SELECT * FROM moderator_report";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table style="margin: 20px;width: 100%;">';
    echo "<tr><th>Тред ID</th><th>Коментар ID</th><th>Причина скарги</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["thread_id"]."</td><td><a href=#".$row["comment_id"].">".$row["comment_id"]."</a></td><td>".$row["report_reason"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Скарг не знайдено.";
}

mysqli_close($con);
?>