<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $grade = $_POST["grade"];

    $sql = "INSERT INTO students_info (name, age, grade) VALUES ('$name', $age, '$grade')";

    if ($conn->query($sql) === TRUE) {
        echo "学生添加成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>