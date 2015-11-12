<?php

// Get all books for table display.
function get_books() {
  global $db;
  // Fetch all the rows.
  $query = 'SELECT * FROM classics';
  $statement = $db->prepare($query);
  $statement->execute();
  // Store all rows in "books" array.
  $book_inventory = $statement->fetchAll();
  $statement->closeCursor();
  // Return books array.
  return $book_inventory;
}

// Get all column names for table display.
function get_classic_column_names() {
  global $db;
  // Fetch the table names.
  $query = 'DESCRIBE classics';
  $statement = $db->prepare($query);
  $statement->execute();
  // Store all column names in column_names array.
  $column_names = $statement->fetchAll();
  $statement->closeCursor();
  // Return column names array.
  return $column_names;
}

// Add book with provided args.
function add_book($author, $type, $title, $year) {
  global $db;
  // Insert new book.
  if (isset($author) ||
      isset($type) ||
      isset($title) ||
      isset($year)) {
    $query = "INSERT INTO classics
                (author, type, title, year)
              VALUES(:author, :type, :title, :year)";

    $statement = $db->prepare($query);
    $statement->bindValue(':author', $author);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':year', $year);
    $statement->execute();
    $statement->closeCursor();
    // echo 'The book has been created.';
  } else {
    echo "The valuse have not been set!";
  }

}

// Delete book with provided args.
function delete_book($Book_author) {
  global $db;
  // Delete the Jack Kerouac book(s).
  $query = "DELETE FROM classics
            WHERE author = :author";

  $statement = $db->prepare($query);
  $statement->bindValue(':author', $Book_author);
  $statement->execute();
  $statement->closeCursor();
}
