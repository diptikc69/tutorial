<?php

// include database connection file

require_once "connection.php";


// Get id from URL to delete that user

$id = $_GET['id'];

// Delete user row from table based on given id

$deleteQuery =  "DELETE FROM student WHERE id = $id";

$result = mysqli_query($conn, $deleteQuery);

// After delete redirect to Home, so that latest user list will be displayed.

header("Location:student.php");
