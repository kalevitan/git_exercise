<?php

// Declare PDO variables.
$dsn = 'mysql:host=127.0.0.1;dbname=publications';
$username = 'bookstore_db';
$password = 'pa55word';

// Try to connect to the database.
try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  // Throw and exception if an issue occurres.
  $error_message = $e->getMessage();
  echo "<p class=\"error\">An error occurred while
        connecting to the database: $error_message</p>";
}
?>
