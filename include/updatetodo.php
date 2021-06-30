<?php

if (isset($_POST['accepttodo']) && isset($_POST['text'])){
    function updatetodo () {
        global $conn;
        print_r($_POST);
        foreach($_POST['textid'] as $index => $id){
            $text = $_POST['text'][$index];
            $mark = $_POST['mark'][$index];
            $sql = "UPDATE todo SET user_todo='$text', completed='$mark' WHERE id='$id'";
            $conn->query($sql);

        }
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

    updatetodo();

    
   
}