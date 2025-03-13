<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input values
    $firstName = htmlspecialchars($_POST["first-name"] ?? '');
    $lastName = htmlspecialchars($_POST["last-name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $number = htmlspecialchars($_POST["phone"] ?? '');
    $comment = htmlspecialchars($_POST["message"] ?? '');

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Validate phone number (Portuguese format)
    if (!preg_match('/^[29][0-9]{8}$/', $number)) {
        echo "Invalid phone number format.";
        exit;
    }

    try {
        // Connect to the database using PDO
        $dsn = "mysql:host=localhost;dbname=client;charset=utf8mb4";
        $username = "root";
        $password = "mysql";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch as associative array
            PDO::ATTR_EMULATE_PREPARES => false, // Use real prepared statements
        ];

        $pdo = new PDO($dsn, $username, $password, $options);

        // Prepare the SQL INSERT statement
        $stmt = $pdo->prepare("INSERT INTO booking (firstName, lastName, email, `number`, comment) 
                               VALUES (:firstName, :lastName, :email, :number, :comment)");

        // Bind values
        $stmt->execute([
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email,
            ':number' => $number,
            ':comment' => $comment,
        ]);

        echo "Great Booking!";
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
}
?>