<?php
session_start();
require_once('../classes/Post.php');
require_once('../config/database.php');
$adminEmail = "admin@admin.com";
if (isset($_SESSION['user_id']) && $_SESSION['email'] != $adminEmail) {
    header('Location: home.php');
}
if ($_POST && isset($_POST['delete'])) {
    $post1 = new Post($pdo);
    $post1->deletePost1($_POST['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleFile.css/home.css">
    <title>Document</title>
</head>

<body>
    <div class="div1">
        <div><a href="">Blog System</a></div>
        <div><a href="home.php">Home</a></div>
    </div>
    <form action="" method="post">
        <br>
        <label for="">enter the id of your post:</label><br>
        <input type="text" name="id">
        <br>
        <input type="submit" name="delete" value="delete">

    </form>

</body>

</html>