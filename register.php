<?php
include_once "./include/newuser.php";
?>


<form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <label for="passwordrepeat">Repeat password:</label>
    <input type="password" name="passwordrepeat" id="passwordrepeat">
    <button type="submit" name="submit">Submit</button>
</form>
<a href="./index.php">Log in</a>