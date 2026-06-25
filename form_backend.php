<?php

include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect data safely
    $first_name = mysqli_real_escape_string($coni, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($coni, $_POST['last_name']);
    $email      = mysqli_real_escape_string($coni, $_POST['email']);
    $phone      = mysqli_real_escape_string($coni, $_POST['phone']);
    $company    = mysqli_real_escape_string($coni, $_POST['company'] ?? '');
    $project_type = mysqli_real_escape_string($coni, $_POST['project_type'] ?? '');
    $budget     = mysqli_real_escape_string($coni, $_POST['budget'] ?? '');
    $timeline   = mysqli_real_escape_string($coni, $_POST['timeline'] ?? '');
    $website    = mysqli_real_escape_string($coni, $_POST['website'] ?? '');
    $reference  = mysqli_real_escape_string($coni, $_POST['reference'] ?? '');
    $features   = mysqli_real_escape_string($coni, $_POST['features'] ?? '');
    $message    = mysqli_real_escape_string($coni, $_POST['message'] ?? '');

    // Handle checkbox (services[])
    if(isset($_POST['services'])){
        $services = implode(", ", $_POST['services']);
    } else {
        $services = '';
    }

    $services = mysqli_real_escape_string($coni, $services);

    // Insert query
    $query = "INSERT INTO project_enquiries 
    (first_name, last_name, email, phone, company, project_type, services, budget, timeline, website, reference, features, message)
    VALUES 
    ('$first_name', '$last_name', '$email', '$phone', '$company', '$project_type', '$services', '$budget', '$timeline', '$website', '$reference', '$features', '$message')";

   if(mysqli_query($coni, $query)) {

    header("Location: start-project.php?status=success");
    exit();

} else {

    header("Location: start-project.php?status=error");
    exit();

}

} else {
    echo "Invalid Request";
}

?>