<?php

if (isset($_POST['accepttodo']) && isset($_POST['text'])){
    function updatetodo () {
        global $conn;
        //print_r($_POST['mark']);
        foreach($_POST['textid'] as $index => $id){
            $text = $_POST['text'][$index];
            //$mark = $_POST['mark'][$index];
            $sql = "UPDATE todo SET user_todo='$text' WHERE id='$id'";
            $conn->query($sql);
        }
    }   
}