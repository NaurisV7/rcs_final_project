<?php

include_once "./include/createtodo.php";
include_once "./include/updatetodo.php";


echo $_SESSION['ID'];

?>
<link rel="stylesheet" href="style.css">

<form action="" method="POST">
    <label for="todo">what you need to do?</label>
    <input type="text" name="todo" id="todo">
    <button type="submit" name="todosubmit">Submit</button>
</form>


<?php

include_once "./include/showtodo.php";
?>

<script src="script.js"></script>