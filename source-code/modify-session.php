<?php
// Start the session
session_start();

// Modify session variables
$_SESSION['id'] = 987654;
$_SESSION['full-name'] = 'John Doe';
$_SESSION['email'] = 'johndoe@gmail.com';
$_SESSION['favorites']['color'] = 'Blue';
$_SESSION['skills'][2] = 'Artificial Intelligence';

// Inform that sessions have been modified successfully and terminate script execution
die('Sessions have been modified successfully.');
