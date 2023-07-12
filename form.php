<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Report</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">

    <form action="#" method="POST">
    <div class="title">
      Medical Form
    </div>

    <div class="form">
      
      <div class="input-field">
        <label for="">First Name</label>
        <input type="text" class="input" name="fname" required>
      </div>
      <div class="input-field">
        <label for="">Last Name</label>
        <input type="text" class="input" name="lname" required>
      </div>
      <div class="input-field">
        <label for="">Age</label>
        <input type="text" class="input" name="age" required>
      </div>
      <div class="input-field">
        <label for="">Email Address</label>
        <input type="email" class="input" name="email">
      </div>
      <div class="input-field">
        <label for="">Gender</label>
        <div id="selectbox">
       <select name="gender" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
       </select>
       </div>
      </div>
      <div class="input-field">
        <label for="">Phone Number</label>
        <input type="text" class="input" name="phone" required>
      </div>

      <div class="input-field terms">
        <label id="check">
          <input type="checkbox" required>
          <span class="checkmark"></span>
        </label>
        <p>Agree to terms and conditions</p>
      </div>


      <div class="input-field">
        <input type="submit" value="Submit" class="btn" name="submit_btn">
      </div>

    </div>
    </form>
  </div>
  
</body>
</html>

<?php 
  if($_POST['submit_btn'])
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email']; 
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

  //   if($fname != "" && $lname != "" && $age !="" && $email !="" && $gender !="" && $phone!="")
  // {

    $query = "INSERT INTO FORM VALUES ('$fname', '$lname', '$age', '$email','$gender', '$phone')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
      // echo "Data inserted into Database";
    }
    else
    {
      echo "failed";
    }
  // }

}
?>





