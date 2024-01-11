<?php 

    include '../../db_conn.php';
    include 'staff_function.php';

    if (isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $user_id = $_POST['user_id'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id']; 
        $year = $_POST['year'];
        $dob = $_POST['dob']; 
        $progress = $_POST['progress'];
        $sql = "UPDATE `users` SET `FirstName`='$firstname',`LastName`='$lastname',`Progress`='$progress',`Email`='$email',`Phone`='$phone',`TProgram_ID`='$tprogram_id',`Year_Start`='$year',`DoB`='$dob' WHERE `User_ID`='$user_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            header('Location: ../studentList.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

    if (isset($_GET['id'])) {

        $user_id = $_GET['id']; 

        $sql = "SELECT * FROM `users` WHERE `User_ID`='$user_id'";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {        

            while ($row = $result->fetch_assoc()) {
                $first_name = $row['FirstName'];
                $year = $row['Year_Start'];
                $lastname = $row['LastName'];
                $progress = $row['Progress'];
                $dob = $row['DoB'];
                $email = $row['Email'];
                $phone = $row['Phone'];
                $tprogram_id = $row['TProgram_ID'];
            } 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../admin/admin_function/edit_button.css">
    <link rel="stylesheet" href="../admin/navbar.css">
    <link rel="stylesheet" href="../admin/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  </head>

  <body>
    <div class="container mt-4">
      <p class="header-text">User Update Form</p>

      <form id="userInfo" action="" method="post">
          <legend>Personal information:</legend>
          <div class="mb-3">
            <label for="firstname" class="form-label">First Name: </label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter first name" value="<?php echo $first_name; ?>" required>
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name: </label>
            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Enter last name" value="<?php echo $lastname; ?>" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Progress: </label>
            <input type="text" class="form-control" name="progress" id="progress" placeholder="Progress" value="<?php echo $progress; ?>" required>
          </div>
          <div class="mb-3">
            <label for="dob" class="form-label">Date of birth: </label>
            <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob; ?>" required>
          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Year: </label>
            <input type="text" class="form-control" name="year" id="year" placeholder="Enter year" value="<?php echo $year; ?>" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $email; ?>" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone: </label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number" value="<?php echo $phone; ?>" required>
          </div>
          <div class="mb-3">
            <label for="tprogram_id" class="form-label">TProgram_ID: </label>
            <input type="text" class="form-control" name="tprogram_id" id="tprogram_id" placeholder="Enter TProgram_ID" value="<?php echo $tprogram_id; ?>" required>
          </div>

          <button type="submit" class="btn btn-lg btn-custom" name="update">Update</button>
      </form> 
    </div>
  </body>
</html>

    <?php
        }

}
?> 