<?php

    function make_connection()
    {
        $hostname="localhost";
        $username="root";
        $password="";
        $dbname="todo-list";

        $conn=new mysqli($hostname,$username,$password,$dbname);

        if ($conn->connect_error) 
        {
            echo "There is an error in database connection ".$conn->connect_error;
        }
        return $conn;
        // echo "Successfully Connected";
    }
    function add_tasks($value){
        $conn = make_connection();
        $query = "INSERT INTO todowebapp (SNo,Task,Status)VALUES(NULL,'$value','0')";

        $result = $conn->query($query);
        return $result;
    }

    function get_tasks(){
        $conn = make_connection();
        $query = "SELECT SNo,Task from todowebapp WHERE Status='0'";
        $result = $conn->query($query);
        return $result;
    }

    function update_tasks($id){
        $conn = make_connection();
        $query = "UPDATE todowebapp set Status='1' WHERE SNo='$id'";
        $result = $conn->query($query);
        return $result;
    }

    function get_tasks_checked(){
        $conn = make_connection();
        $query = "SELECT SNo,Task From todowebapp WHERE Status='1'";
        $result = $conn->query($query);
        return $result;
    }

    function delete_tasks($id){
        $conn = make_connection();
        $query = "DELETE From todowebapp WHERE SNo='$id'";
        $result = $conn->query($query);
        return $result;
    }

?>