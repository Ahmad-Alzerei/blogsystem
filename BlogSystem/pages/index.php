<?php
session_start();
include('../includes/registerHeader.php');
require_once('../classes/User.php');
require_once('../config/database.php');
$adminEmail = "admin@admin.com";
if (isset($_SESSION['user_id'])) {
    if ($_POST['email'] == $adminEmail) {
        header('Location: admins.php');
        exit;
    } else {
        header('Location: home.php');
        exit;
    }
}
if ($_POST && isset($_POST['login']) &&  isset($_POST['email']) &&  isset($_POST['password'])) {
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $user = new User($pdo);
    $resuilt = $user->login($email, $password);
    if ($resuilt === true) {
        if ($_POST['email'] == $adminEmail) {
            header('Location: admins.php');
            exit;
        } else {
            header('Location: home.php');
            exit;
        }
    } else {
        $error = $resuilt;
    }
}

?>

<form action="" method="post" class="SIN">
    <h3>log in</h3>
    <input type="email" name="email" required placeholder="enter your email" class="Sin2" required>
    <input type="password" name="password" required placeholder="enter your password" class="Sin2" required>
    <input type="submit" name="login" class="form-btn">
    <p>if you don't have an account ? <a href="register.php">register now </a></p>
    <div class="container">
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif ?>
</form>
</div>
<?php
include('../includes/footer.php')
?>