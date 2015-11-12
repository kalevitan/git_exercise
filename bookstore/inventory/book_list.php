<?php include_once('view/header.php'); ?>

<main>

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

    <p>
      <a href="?action=add_book">Add Book</a> | <a href="?action=delete_book">Delete Book</a>
    </p>

</main>

<?php include_once('view/footer.php'); ?>
