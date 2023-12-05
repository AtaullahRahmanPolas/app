<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host="localhost";
    $username="root";
    $password="";
    $db_name="brta";
    $conn = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");

    //form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $present_address = $_POST["present_address"];
    $permanant_address = $_POST["permanant_address"];
    $nid = $_POST["nid"];
    $vehicle_number = $_POST["vehicle_number"];
    $chess_no = $_POST["chess_no"];
    $birth = $_POST["birth"];

    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, present_address, permanant_address, nid, vehicle_number, chess_no, birth, time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("sssssssss", $name, $email, $phone, $present_address, $permanant_address, $nid, $vehicle_number, $chess_no, $birth);

    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>