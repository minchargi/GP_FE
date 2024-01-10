<?php 

    include '../../db_conn.php';

    if (isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $user_id = $_POST['user_id'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id']; 
        $year = $_POST['year'];
        echo $firstname;
        echo "(", $user_id,")"; 
        $sql = "UPDATE `users` SET `FirstName`='$firstname',`LastName`='$lastname',`Email`='$email',`Phone`='$phone',`TProgram_ID`='$tprogram_id',`Year`='$tprogram_id' WHERE `User_ID`='$user_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo " Record updated successfully.";
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
                $year = $row['Year'];
                $lastname = $row['LastName'];
                $email = $row['Email'];
                $phone = $row['Phone'];
                $tprogram_id = $row['TProgram_ID'];
            } 

?>

        <h2>User Update Form</h2>

        <form action="" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            First name:<br>
            <input type="text" name="firstname" value="<?php echo $first_name; ?>">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <br>
            Last name:<br>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <br>
            Year:<br>
            <input type="text" name="year" value="<?php echo $year; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Phone:<br>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
            <br>
            TProgram_ID:<br>
            <input type="text" name="tprogram_id" value="<?php echo $tprogram_id; ?>">
            <br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form> 

        </body>

        </html> 

    <?php
    } else{ 
        header('Location: view_student.php');
    } 
}
?> 