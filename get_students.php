<?php
include 'db_connection.php';

$sql = "SELECT id, name, age, grade FROM students_info";
$result = $conn->query($sql);

$students = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo json_encode(array("message" => "0 结果"));
}

echo json_encode($students);

$conn->close();
?>
