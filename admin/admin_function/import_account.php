<?php
include "../../db_conn.php";
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["fileImport"]["tmp_name"];    
     if($_FILES["fileImport"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            $password = md5('1');
             $sql = "INSERT into users (User_ID ,Year_Start,Progress,FirstName,LastName,Gender,Email,Phone,DoB,TProgram_ID,Password,Role) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$password."','".$getData[10]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"../student_trainingProgram.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"../student_trainingProgram.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>