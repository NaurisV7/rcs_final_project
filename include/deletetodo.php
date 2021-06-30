<?php

include "DB.php";



if (isset($_POST['accepttodo']) && isset($_POST['id']) && $_POST['id'] > 0){
    function deletetodo () {
        global $conn;
        foreach($_POST['id'] as $id){
            $sql = "DELETE FROM todo WHERE id='$id'";
            $conn->query($sql);

        }
        echo "Todos deleted";
    } 

    deletetodo();

}


