
<?php

// Add the todo to the database
function todoData($todoValue, $date, $time) {

    require "../database/connect.php";

    $todo_register = "INSERT INTO todo (`event`, `date`, `time`) VALUES('$todoValue', '$date', '$time')";

    $todo_result = mysqli_query($conn, $todo_register);

    if($todo_result) {

        echo "Added";

    } else  {
        mysqli_error($conn);
    }

};



?>