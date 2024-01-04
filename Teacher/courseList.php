<?php
  include "verifyTeacher.php";
  include "teacher_function.php";
?>

<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Intake</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../Teacher/courseList.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/teachernav.php'; ?>

        <!-- Main content -->
      <div class="container mt-4">
        <p class="header-text">Intake</p>
      </div>
      <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#add">
            <span class="button-content gap-4">
                <i class="fas fa-plus-circle"></i>
                Add
            </span>
        </button>
        </div>
      </div>
      <div class="container mt-4">
      <?php
        $result = fetch_program_year($user_id);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
      ?>
      
        <div class="accordion">
            <div class="accordion-item">
              <button class="accordion-header" onclick="toggleAccordion(this)"><b><?php echo $row['Year']; ?></b></button>
              <div class="accordion-content">
                <ul>
                  <?php
                    $result2 = fetch_program($user_id,$row['Year']);
                    if ($result2->num_rows > 0) {
                      while ($row2 = $result2->fetch_assoc()) {
                  ?>
                  <li><a href="../Teacher/bachelor_year.php?tp_id=<?php echo $row2['TProgram_ID']; ?>&year=<?php echo $row2['Year']; ?>"><?php echo $row2['TProgram_Name']; ?></a></li>
                  <?php
                      }
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        
      <?php
            }
          }
      ?>
      </div>
       <script>
        function toggleAccordion(btn) {
          let content = btn.nextElementSibling; 
          if (content.style.maxHeight) {
            content.style.maxHeight = null; 
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        }

  
       </script>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>


    </body>
</html>