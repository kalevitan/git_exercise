<?php include_once('view/header.php'); ?>

  <main>
    <h3>Add Book to Inventory - Origin:</h3>

    <?php if(isset($book)) {
      print "<form action=\"?action=update_book&bookID={$book['bookID']}\" method=\"post\">";
    } else {
      print '<form action="?action=add_book_db" method="post">';
    } ?>
      <label for="author">Author:</label>
      <input name="author" id="author" type="text" maxlength="150"
        <?php if(isset($book)) {
          print "value=\"{$book['author']}\"";
        }?>><br>
      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150"
        <?php if(isset($book)) {
          print "value=\"{$book['title']}\"";
        }?>><br>
      <label for="type">Type:</label>
      <input name="type" id="type" type="text" maxlength="150"
        <?php if(isset($book)) {
          print "value=\"{$book['type']}\"";
        }?>><br>
      <label for="year">Year:</label>
      <input name="year" id="year" type="text" maxlength="150"
        <?php if(isset($book)) {
          print "value=\"{$book['year']}\"";
        }?>><br>
      <input type="submit" value="Submit">
    </form>

  </main>

<?php include_once('view/footer.php'); ?>
