<?php 

require_once "connection.php";



if (isset($_POST['update'])) {

  $id = $_POST['id'];

  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $phone_no = $_POST['phone_no'];
  $password = $_POST['password'];
  $username = $_POST['username'];

  
  $sql = "UPDATE student SET first_name = '$first_name',middle_name = '$middle_name', last_name = '$last_name', address = '$address', phone_no = '$phone_no', password = '$password', username = '$username' WHERE id = $id"; 
  
  if (mysqli_query($conn, $sql)) {

      header("location: student.php");

  } else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  
}

$id = $_GET['id'];

$editQuery = "SELECT * FROM student WHERE id='$id'";

$studentData = mysqli_query($conn, $editQuery);

while($results = mysqli_fetch_array($studentData)){

  $first_name = $results['first_name'];
  $middle_name = $results['middle_name'];
  $last_name = $results['last_name'];
  $address = $results['address'];
  $phone_no = $results['phone_no'];
  $password = $results['password'];
  $username = $results['username'];

}


mysqli_close($conn);
?>

<html>
<head>
<title>Edit User</title>
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
<form action="edit.php" method="post">

  <h2>Edit User</h2>

  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="input-group">
    <label>Username</label>
    <input type="username" name="username" value="<?php echo $username; ?>">
  </div>

  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $password; ?>">
  </div>

  <div class="input-group">
    <label>First Name</label>
    <input type="text" name="first_name" value="<?php echo $first_name; ?>">
  </div>

  <div class="input-group">
    <label>Middle Name</label>
    <input type="text" name="middle_name" value="<?php echo $middle_name; ?>">
  </div>

  <div class="input-group">
    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php echo $last_name; ?>">
  </div>

  <div class="input-group">
    <label>Address</label>
    <input type="text" name="address" value="<?php echo $address; ?>">
  </div>

  <div class="input-group">
    <label>Phone</label>
    <input type="text" name="phone_no" value="<?php echo $phone_no; ?>">
  </div>

  <div class="input-group">
    <button class="btn" type="submit" name="update" >Update</button>
  </div>

</form>

</body>

</html>