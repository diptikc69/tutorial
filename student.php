<?php

// Include config file
require_once "connection.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student</title>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        .table{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Students Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <?php
                    
                    
                    // Attempt select query execution

                    $sql = "SELECT * FROM student";

                    if($result = mysqli_query($conn, $sql)){

                        if(mysqli_num_rows($result) > 0){

                            echo '<table class="table">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>First Name</th>";
                                        echo "<th>Last Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                while($row = mysqli_fetch_array($result)){

                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['first_name'] . "</td>";
                                        echo "<td>" . $row['middle_name'] . "</td>";
                                        echo "<td>" . $row['last_name'] . "</td>";
                                        echo "<td>" . $row['phone_no'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="edit.php?id='. $row['id'] .'">Edit</a> ';
                                            echo '<a href="delete.php?id='. $row['id'] .'">Delete</a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                            
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>