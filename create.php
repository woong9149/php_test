<?php
  require('lib/print.php');
  require('veiw/top.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">Create</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>  
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>  
      <input type="submit">
    </form>
    <?php require('/veiw/buttom.php') ?>