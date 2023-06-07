<?php

include("dbtest.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    if (isset($_POST["addTask"])) 
    {
        if ($_POST["taskBox"]) 
        {
            add_tasks($_POST["taskBox"]);
        }
    }
    else if (isset($_POST["checked"])) 
    {
        echo $_POST["checked"];
        update_tasks($_POST["checked"]);
    }
    else if (isset($_POST["deleted"]))
    {
        delete_tasks($_POST["deleted"]);
    }

}

header("Location:To-Do List.php")

?>