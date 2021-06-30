<?php
include_once "./include/loginuser.php";

?>


<form action="" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="pass">Password</label>
    <input type="password" name="password" id="pass">
    <button type="submit" name="submit">Submit</button>

</form>

<a href="./register.php">Register</a>