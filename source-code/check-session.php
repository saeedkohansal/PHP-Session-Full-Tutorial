<?php
// Start the session
session_start();

// Dump the session data for debugging
var_dump($_SESSION);

// Alternative method to display session data with enhanced formatting
# echo '<pre>', print_r($_SESSION, TRUE), '</pre>';
