<?php
// Start the session
session_start();

// Check if the user is logged in
if (
    isset($_SESSION['logged-in']) &&
    $_SESSION['logged-in'] === true
) {
    // Display welcome message and user information
    echo "Welcome to our website!<br>";
    echo "<hr>";
    echo "You are logged in as: <strong>{$_SESSION['full-name']}</strong><br>";
    echo "ID: <strong>{$_SESSION['id']}</strong><br>";
    echo "Email: <strong>{$_SESSION['email']}</strong><br>";
    echo "<hr>";

    // Display user's favorite items
    foreach ($_SESSION['favorites'] as $key => $value) {
        echo "Favorite $key: <strong>$value</strong><br>";
    }
    echo "<hr>";

    // Display user's skills
    echo "Skills:<br>";
    foreach ($_SESSION['skills'] as $skill) {
        echo '<strong>' . $skill . '</strong><br>';
    }
} else {
    // If not logged in, display a message and terminate script execution
    die('Welcome to our website!<br>To access this system, please log in.');
}
?>
<!-- Apply style based on the user's favorite color -->
<style>
    strong {
        color: <?= $_SESSION['favorites']['color'] ?>;
    }
</style>