<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Alternative method to clear all session variables
# $_SESSION = array();

// Check if a session cookie exists and delete it
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Destroy the session
session_destroy();

// Inform that the session has been destroyed successfully and terminate script execution
die('Session destroyed successfully.');
