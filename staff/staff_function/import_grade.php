<?php
include "../../db_conn.php";
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["fileImport"]["tmp_name"];    
     if($_FILES["fileImport"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into grade (Student_ID  ,Year ,Course_ID ,Attendance,Midterm,Final) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"../gradesDetail.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"../gradesDetail.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>