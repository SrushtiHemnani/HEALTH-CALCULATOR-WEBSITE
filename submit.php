<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for MySQL
$password = "";     // Default password is empty
$dbname = "my_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Get data from POST request and sanitize inputs
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$premium_amount = isset($_POST['premium-amount']) ? trim($_POST['premium-amount']) : null; // Handle premium amount

// Validate input
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
    exit;
}

// Validate phone number format (assuming an Indian phone number format)
if (!preg_match('/^[789]\d{9}$/', $phone)) {
    echo json_encode(['success' => false, 'message' => 'Invalid phone number.']);
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message, premium_amount) VALUES (?, ?, ?, ?, ?)");
if ($stmt === false) {
    echo json_encode(['success' => false, 'message' => 'Statement preparation failed: ' . $conn->error]);
    $conn->close();
    exit;
}

// Bind parameters
$stmt->bind_param("sssss", $name, $email, $phone, $message, $premium_amount);

// Execute the query
if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Record added successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
