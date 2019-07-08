<?php
$user = $_ENV['MYSQL_USER'];
$pass = $_ENV['MYSQL_PASS'];
$db = $_ENV['MYSQL_DB'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=$db", $user, $pass);
    $statement = $pdo->prepare("SELECT * FROM `user`");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_OBJ);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>HTML5 template file</title>
  <meta name="description" content="HTML5 template file">
  <meta name="author" content="Fernando Uchiyama">
</head>

<body>
  <h1>Hello World!</h1>

  <p>List of current and previous US presidents, from our MySql table:</p>

  <?php
      echo "<h2>Users</h2>";
      echo "<ul>";
      foreach ($users as $user) {
          echo "<li>" . $user->name . "</li>";
      }
      echo "</ul>";
  ?>
</body>
</html>