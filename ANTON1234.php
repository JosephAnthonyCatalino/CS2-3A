<?php
    // Retrieve and sanitize the "firstname" input
    $firstname = ($_POST['firstname']);

    // Retrieve and sanitize the "age" input
    $age = ($_POST['age']);

    // Retrieve and sanitize the "gender" input
    $gender = ($_POST['gender']);

    // Retrieve and sanitize the "quote" input
    $quote = ($_POST['quote']);

    // Check if any input field is empty
    if (empty($firstname) || empty($age) || empty($gender) || empty($quote)) {
        echo "Please fill in all fields.";
    } else {
        // Display the user's input data
        echo "You are $firstname, a $age-year-old $gender.<br>";
        echo "Your motto in life is: \"$quote\"";
    }
?>