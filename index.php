<?php
//include_once "./include/loginuser.php";

include_once "./classes/login_validate.php";

if (isset($_POST['submit'])) {
    $validate = new LoginValidate();
    $errors = $validate->validateLogin();
    print_r($errors);


}



?>


<form action="" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="pass">Password</label>
    <input type="password" name="password" id="pass">
    <button type="submit" name="submit">Submit</button>

</form>

<a href="./register.php">Register</a>