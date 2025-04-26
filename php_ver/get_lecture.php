<?php
include 'connect.php';

$course_code = isset($_GET['course_code']) ? $_GET['course_code'] : '';

$sql = "SELECT lecture_id, lecture_title, lecture_date, lecture_link FROM lectures WHERE course_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_code);
$stmt->execute();
$result = $stmt->get_result();

$lectures = array();
while ($row = $result->fetch_assoc()) {
    $lectures[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode($lectures);
?>
