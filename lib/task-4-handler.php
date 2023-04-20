<h2>Form result</h2>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($_POST['cf-name']) ? htmlspecialchars($_POST['cf-name']) : '';
        $email = isset($_POST['cf-email']) ? filter_var($_POST['cf-email'], FILTER_SANITIZE_EMAIL) : '';
        $message = isset($_POST['cf-message']) ? htmlspecialchars($_POST['cf-message']) : '';

        // Do Stuff

        echo "<p>Name: {$name}</p>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Message: {$message}</p>";
    } else {
        echo 'Error in data!';
    }