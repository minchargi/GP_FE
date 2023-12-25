<?php 
function get_footer()
{
?>
<head>
  <title>Grades</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="footer.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<footer>
    <div class="row mt-4">
        <div class="col-md-4 infor">
            <img class="white-logo" src="../images/white_logo.png">
            <!--Address-->
            <p class="detail"> <i class="fa-solid fa-house icon-footer"></i>
                Address
            </p>
            <p class="text-detail"> A21 building, Vietnam Academy of Science and Technology, 18 Hoang Quoc Viet, Cau Giay, Hanoi</p>
            <hr class="divider">

            <!--Phone-->
            <p class="detail"><i class="fa-solid fa-phone icon-footer"></i>
            Phone</p>
            <p class="text-detail"> +84-24 37 91 69 60</p>
            <hr class="divider">
            
            <!--Email-->
            <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                Email
            </p>
            <p class="text-detail">officeusth@usth.edu.vn</p>
            <hr class="divider">
            
            <!--Contact-->
            <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                Contact
            <p class="text-detail">webmaster@usth.edu.vn</p>
            <hr class="divider">
            
        </div>
        <div class="copy-right  py-2 mt-4">
            <p class="ft-text">&copy; 2021 <span class="web-site">usth.edu.vn</span>. All Rights reserved</p>
        </div>
    </div>
  </footer>

  <?php } ?>