<?php

if (empty($_SESSION)) {
    header('location: index.php');
}

include_once "./include/createtodo.php";
include_once "./include/updatetodo.php";
include_once "./include/logout.php";

?>
<link rel="stylesheet" href="style.css">

<form action="" method="POST">
    <label for="todo">What you need to do?</label>
    <input type="text" name="todo" id="todo">
    <button type="submit" name="todosubmit">Submit</button>
</form>

<?php

include_once "./include/showtodo.php";
?>
<form action="" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>
<script src="script.js"></script>