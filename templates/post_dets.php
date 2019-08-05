<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $first_name = $_POST['Title'];
    $last_name = $_POST['comment'];

    echo $first_name;
    echo $last_name;
     ?>

    Title: <?php echo $_POST['Title']; ?><br>
    Comment: <?php echo $_POST['comment']; ?>

  </body>
</html>
