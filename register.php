<?php

include_once "./classes/validate.php";

if (isset($_POST['submit'])) {
    $validate = new Validation();
    $errors = $validate->validateUser();

}
?>

<form action="" method="POST">

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="">
    <div id="container" class="container">
        <?php echo $errors['username'] ?? ''; ?>
    </div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <div id="container" class="container">
        <?php echo $errors['password'] ?? ''; ?>
    </div>
    <label for="passwordrepeat">Repeat password:</label>
    <input type="password" name="passwordrepeat" id="passwordrepeat">
    <button type="submit" name="submit">Submit</button>
</form>
<a href="./index.php">Log in</a>