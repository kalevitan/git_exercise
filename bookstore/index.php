<?php
require_once('model/db.php');
require_once('model/book_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
  $action = filter_input(INPUT_GET, 'action');
  if ($action == null) {
    $action = 'book_list';
  }
}

if ($action == 'book_list') {
  $books = get_books();
  $column_names = get_classic_column_names();
  include('inventory/book_list.php');
} else if ($action == 'add_book') {
  include('inventory/add_book.php');
} else if ($action == 'add_book_db') {
  $author = filter_input(INPUT_POST, 'author');
  $title = filter_input(INPUT_POST, 'title');
  $type = filter_input(INPUT_POST, 'type');
  $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
  add_book($author, $type, $title, $year);
  header('Location: .');
} else if ($action == 'edit_book') {
  $bookID = filter_input(INPUT_POST, 'bookID', FILTER_VALIDATE_INT);
  $book = edit_book($bookID);
  include('inventory/add_book.php');
} else if ($action == 'update_book') {
  $bookID = filter_input(INPUT_GET, 'bookID', FILTER_VALIDATE_INT);
  $author = filter_input(INPUT_POST, 'author');
  $title = filter_input(INPUT_POST, 'title');
  $type = filter_input(INPUT_POST, 'type');
  $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
  update_book($bookID, $author, $type, $title, $year);
  var_dump($bookID, $author, $type, $title, $year);
  header('Location: .');
} else if ($action == 'delete_book') {
  $bookID = filter_input(INPUT_POST, 'bookID', FILTER_VALIDATE_INT);
  delete_book($bookID);
  header('Location: .');
} else {
  exit;
}
