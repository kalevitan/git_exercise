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
  add_book($author,$type,$title,$year);
  // add_book("Jack Kerouac","Fiction","On the Road","1957");
  header('Location: .');
} else if ($action == 'delete_book') {
  delete_book(null);
  header('Location: .');
} else {
  exit;
}
