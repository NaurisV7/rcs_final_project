<?php

include_once "deletetodo.php";

include_once "DB.php";

$id = $_SESSION['ID'];

$sql = "SELECT * FROM todo WHERE user_id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <form action="" method="POST">
        <?php
        while ($row = $result->fetch_assoc()) {
                    echo "<span id=spanu" . $row['id'] . ">" . $row['user_todo'] . "</span>";
                    ?>
                    <input type="text" class="none" id="su<?= $row['id'];?>" name="text[]" value="<?= $row['user_todo'];?>">
                    <input type="hidden" name="textid[]" value="<?= $row['id'];?>">
                    <input type="checkbox" name="id[]" value="<?= $row['id'];?>">
                    <input type="button" name="update" id="u<?= $row['id'];?>" class="update u<?= $row['id'];?>" value="Update">
                    <?php
                    echo "<br>";
        }
        ?>
        <button type="submit" id="submit" name="accepttodo">Accept changes</button>
    </form>
    <?php
}


    





