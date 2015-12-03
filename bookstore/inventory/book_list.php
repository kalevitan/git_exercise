<?php include_once('view/header.php'); ?>

<main>

    <h3>Our Current Books:</h3>

    <?php //var_dump($books); ?>

    <table border="1">
      <tr>
      <?php foreach ($column_names as $column_name) : ?>
        <th><?php print ucfirst($column_name['Field']); ?></th>
      <?php endforeach; ?>
      <th>Edit</th>
      <th>Delete</th>
      </tr>

      <?php foreach ($books as $book) : ?>
        <tr>
          <td><?php print $book['author']; ?></td>
          <td><?php print $book['title']; ?></td>
          <td><?php print $book['type']; ?></td>
          <td><?php print $book['year']; ?></td>
          <td>
            <form action="." method="post">
              <input type="hidden" name="action" value="edit_book">
              <input type="hidden" name="bookID" value="<?php print $book['bookID']; ?>">
              <input type="submit" value="Edit">
            </form>
          </td>
          <td>
            <form action="." method="post">
              <input type="hidden" name="action" value="delete_book">
              <input type="hidden" name="bookID" value="<?php print $book['bookID']; ?>">
              <input type="submit" value="Delete">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>

    <p>
      <a href="?action=add_book">Add Book</a>
    </p>

</main>

<?php include_once('view/footer.php'); ?>
