

<?php

// checking if an input is entered to store

if(isset($_POST['todovalue'])) {
    
    $todoValue = trim($_POST['todovalue']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    
    require "../functions/function.php";

	$feedback = todoData($todoValue, $date, $time);

    echo $feedback;

}




?>