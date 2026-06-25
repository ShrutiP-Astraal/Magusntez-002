<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include_once ('config.php');
    
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget']; // Assuming the select element has name="select"
    $message = $_POST['textarea'];
    
    // Prepare and execute SQL statement to insert data into service_requests table
    $query = "INSERT INTO service_requests (first_name, last_name, email, phone, budget, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($coni, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $email, $phone, $budget, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        // Insertion successful
        header('Location: index.php?msg=' . urlencode(base64_encode("Thank You for Contacting Us. We will revert back shortly")));
        exit;
    } else {
        // Insertion failed
        echo "Error: " . mysqli_error($coni);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($coni);
} else {
    // Redirect back to form page if form is not submitted
    header("Location: form_page.php");
    exit();
}
?>
