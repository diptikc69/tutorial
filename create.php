<?php 

  require_once "connection.php";

	if (isset($_POST['save'])) {

        $first_name = $_POST['first_name'];
        $middle_name=$_POST['middle_name '];
        $last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$phone_no = $_POST['phone_no']; 
		$password = $_POST['password'];
		$username = $_POST['username'];

		
    $sql = "INSERT INTO `student` (`first_name`, `middle_name`, `last_name`,`address`, `phone_no`, `password`, `username`) VALUES ('$first_name','middle_name', '$last_name','$address', '$phone_no', '$password', '$username')";
    
    if (mysqli_query($conn, $sql)) {

        header("location: student.php");

    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
		mysqli_close($conn);
	}
  ?>

<html>
<head>
	<title>Register new Student</title>
  <style>
    body {
        font-size: 19px;
    }
    table{
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }
    tr {
        border-bottom: 1px solid #cbcbcb;
    }
    th, td{
        border: none;
        height: 30px;
        padding: 2px;
    }
        tr:hover {
        background: #F5F5F5;
    }

    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px; 
        border: 1px solid #bbbbbb; 
        border-radius: 5px;
    }

    .input-group {
        margin: 10px 0px 10px 0px;
    }
    .input-group label {
        display: block;
        text-align: left;
        margin: 3px;
    }
    .input-group input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    .btn {
        padding: 10px;
        font-size: 15px;
        color: white;
        background: #5F9EA0;
        border: none;
        border-radius: 5px;
    }
    .edit_btn {
        text-decoration: none;
        padding: 2px 5px;
        background: #2E8B57;
        color: white;
        border-radius: 3px;
    }

    .del_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }
    .msg {
        margin: 30px auto; 
        padding: 10px; 
        border-radius: 5px; 
        color: #3c763d; 
        background: #dff0d8; 
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }
  </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

   <h2>Register new Student</h2>

    <div class="input-group">
			<label>First Name</label>
			<input type="first_name" name="first_name" value="">
		</div>

    <div class="input-group">
			<label>Middle Name</label>
			<input type="text" name="middle_name" value="">
		</div>

		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="last_name" value="">
		</div>
        
        <div class="input-group">
			<label>Phone No</label>
			<input type="text" name="phone_number" value="">
		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>

    <div class="input-group">
			<label>Username</label>
			<input type="username" name="username" value="">
        </div>
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="">
		</div>

		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>

	</form>

</body>

</html>