<?php
// Set a custom session name
# session_name('New-Session-Name');

// Start the session
session_start();

// Set session variables
$_SESSION['id'] = 648412;
$_SESSION['logged-in'] = true;
$_SESSION['full-name'] = 'Saeed Kohansal';
$_SESSION['email'] = 'kohansalism@gmail.com';
$_SESSION['verified-user'] = true;
$_SESSION['skills'] = ['PHP', 'JavaScript', 'HTML', 'CSS'];
$_SESSION['favorites'] = [
    'color' => 'Orange',
    'car' => 'Ferrari',
    'animal' => 'Lion'
];

// Inform that all session variables are set successfully and terminate script execution
die('All session variables are set successfully.');
