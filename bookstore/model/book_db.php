<?php

// Get all books for table display.
function get_books() {
  global $db;
  // Fetch all the rows.
  $query = 'SELECT * FROM classics';
  $statement = $db->prepare($query);
  $statement->execute();
  // Store all rows in "books" array.
  $book_inventory = $statement->fetchAll(PDO::FETCH_ASSOC);
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
  // Leave out the first column, bookID.
  array_shift($column_names);
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
    echo "Error: The Book could not be added!";
  }
}

function edit_book($bookID) {
  global $db;
  // Fetch single book row.
  $query = 'SELECT * FROM classics
            WHERE bookID = :bookID';
  $stmt = $db->prepare($query);
  $stmt->bindValue(':bookID', $bookID);
  $stmt->execute();
  $book = $stmt->fetch();
  $stmt->closeCursor();
  return $book;
}

function update_book($bookID, $author, $type, $title, $year) {
  global $db;
  $query = "UPDATE classics set
              author = :author,
              type = :type,
              title = :title,
              year = :year
            WHERE bookID = :bookID";

  $statement = $db->prepare($query);
  $statement->bindValue(':bookID', $bookID);
  $statement->bindValue(':author', $author);
  $statement->bindValue(':type', $type);
  $statement->bindValue(':title', $title);
  $statement->bindValue(':year', $year);
  $statement->execute();
  $statement->closeCursor();
  var_dump($bookID, $author, $type, $title, $year);
}

// Delete book with provided args.
function delete_book($bookID) {
  global $db;
  // Delete the Jack Kerouac book(s).
  if (isset($bookID)) {
    $query = "DELETE FROM classics
              WHERE bookID = :bookID";

    $statement = $db->prepare($query);
    $statement->bindValue(':bookID', $bookID);
    $statement->execute();
    $statement->closeCursor();
  } else {
    echo "Error: The book could not be deleted!";
  }
}
