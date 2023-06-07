<?php
include("dbtest.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do WebApp</title>
    <link rel="stylesheet" href="to-do-style.css">
</head>

<body>
    <div class="heading">
        <h1 id="heading">To-Do Webapp</h1>
    </div>

    <div class="to-do-container">
        <div class="container">
            <form action="actionHandle.php" method="post">

                <div id="task-container">
                    <input type="text" name="taskBox" id="taskBox" placeholder="Add a Task">
                    <button type="submit" id="addTask" name="addTask">Add Task</button>
                </div>

                <div class="list-container">
                    <ul class="list">
                        <?php
                        $taskList = get_tasks();
                        while ($row = $taskList->fetch_assoc()) {
                            ?>
                            <li class="items">
                                <p>
                                    <?php echo $row["Task"]; ?>
                                </p>
                                <div id="btn-container">
                                    <button type="submit" id="check" name="checked" value="<?php echo $row['SNo']; ?>"><i
                                            class="fa-solid fa-circle-check"></i></button>
                                    <button type="submit" id="delete" name="deleted" value="<?php echo $row['SNo']; ?>"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <hr>
                    <ul class="list">
                        <?php
                        $taskList = get_tasks_checked();
                        while ($row = $taskList->fetch_assoc()) {
                            ?>
                            <li class="items fade">
                                <p class="delete-task"><span>
                                    <?php echo $row["Task"]; ?></span>
                                </p>
                                <div id="btn-container">
                                    <button type="submit" id="check" name="" class="hidden" ><i
                                            class="fa-solid fa-circle-check"></i></button>
                                    <button type="submit" id="delete" name="deleted" value="<?php echo $row['SNo']; ?>"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </form>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/012d0abd64.js"></script>

</html>