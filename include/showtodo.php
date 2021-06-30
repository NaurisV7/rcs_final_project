<?php

include_once "deletetodo.php";

include_once "DB.php";

$id = $_SESSION['ID'];

echo $_POST['text'];

$sql = "SELECT * FROM todo WHERE user_id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <form action="" method="POST">
        <?php
        while ($row = $result->fetch_assoc()) {
                    echo "<span id=spanu" . $row['id'] . ">" . $row['user_todo'] . "</span>";
                    ?>
                    <input type="checkbox" name="id[]" value="">
                    <input type="button" name="update" id="u<?= $row['id'];?>" class="update u<?= $row['id'];?>" value="Update">
                    <input type="submit" name="save" id="su<?= $row['id'];?>" class="su<?= $row['id'];?> none" value="Save">

                    <?php
                    echo "<br>";
        }
        ?>
        <button type="submit" name="accepttodo">Accept changes</button>
    </form>
    <?php
}
print_r($_POST);

    





