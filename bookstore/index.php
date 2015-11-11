<?php
require_once("db.php");

// Fetch all the rows.
$query = 'SELECT * FROM classics';

$statement = $db->prepare($query);
$statement->execute();
$books = $statement->fetchAll();
$statement->closeCursor();

// Fetch the table names.
$query = 'DESCRIBE classics';

$statement = $db->prepare($query);
$statement->execute();
$column_names = $statement->fetchAll();
$statement->closeCursor();

// Define new book.
$author = "Jack Kerouac";
$type = "Fiction";
$title = "On the Road";
$year = "1957";

// Insert new book.
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

// Delete the Jack Kerouac book(s).
$query = "DELETE FROM classics
          WHERE author = :author";

$statement = $db->prepare($query);
$statement->bindValue(':author', $author);
$statement->execute();
$statement->closeCursor();

?>

<!doctype html>
  <head>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <title>Dog Eared Books | Asheville, NC</title>
  </head>

  <body>
    <main>
        <h1>Welcome to Dog Eared Books</h1>
        <hr>
        <h3>Our Current Books:</h3>

        <?php //var_dump($books); ?>

        <table border="1">
          <tr>
          <?php foreach ($column_names as $column_name) : ?>
            <th><?php print ucfirst($column_name['Field']); ?></th>
          <?php endforeach; ?>
          </tr>

          <?php foreach ($books as $book) : ?>
            <tr>
              <td><?php print $book['author']; ?></td>
              <td><?php print $book['title']; ?></td>
              <td><?php print $book['type']; ?></td>
              <td><?php print $book['year']; ?></td>
            </tr>
          <?php endforeach; ?>

        </table>

    </main>
  </body>

</html>
