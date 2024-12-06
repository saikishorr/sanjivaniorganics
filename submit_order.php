<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'sanjivani');

    if ($conn->connect_error) {
        http_response_code(500);
        exit('Database connection failed.');
    }

    // Retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $oil_type = $conn->real_escape_string($_POST['oil_type']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $delivery_date = $conn->real_escape_string($_POST['delivery_date']);
    $address = $conn->real_escape_string($_POST['address']);

    // Insert data into the database
    $sql = "INSERT INTO orders (name, email, phone, oil_type, quantity, delivery_date, address) 
            VALUES ('$name', '$email', '$phone', '$oil_type', '$quantity', '$delivery_date', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        http_response_code(500);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
