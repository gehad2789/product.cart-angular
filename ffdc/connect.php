<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "training");
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if submit button is clicked
if (isset($_POST['Send Message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // attempt insert query execution
    $sql = "INSERT INTO connect  (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// close connection
mysqli_close($link);
?>