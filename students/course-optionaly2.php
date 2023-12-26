<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Optional Subjects</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../students/style.css">
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/navbar.php'; ?>
        
        <h1>Optional Subjects</h1>

        <div class="container mt-2">
          <div class="text">Semester 1</div>
          <table class="table table-bordered table-hover">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col"> </th>
                  <th class="td-head" scope="col">Course ID</th>
                  <th class="td-head" scope="col">Course Name</th>
                  <th class="td-head" scope="col">Credits</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">
                    <input class="tb-check-input" type="checkbox" id="checkbox1">
                  </th>
                  <td class="td-custom">ICT3.001</td>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">
                    <input class="tb-check-input" type="checkbox" id="checkbox2">
                  </th>
                  <td class="td-custom">ICT3.001</td>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">
                    <input class="tb-check-input" type="checkbox" id="checkbox3">
                  </th>
                  <td class="td-custom">ICT3.001</td>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">
                    <input class="tb-check-input" type="checkbox" id="checkbox4">
                  </th>
                  <td class="td-custom">ICT3.001</td>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">
                    <input class="tb-check-input" type="checkbox" id="checkbox5">
                  </th>
                  <td class="td-custom">ICT3.001</td>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                </tr>
                
              </tbody>
            </table>
      </div>

      <div class="container mt-2">
        <div class="text">Semester 2</div>
        <table class="table table-bordered table-hover">
            <thead>
              <tr class="tb-row">
                <th class="td-head" scope="col"> </th>
                <th class="td-head" scope="col">Course ID</th>
                <th class="td-head" scope="col">Course Name</th>
                <th class="td-head" scope="col">Credits</th>
              </tr>
            </thead>
            <tbody>
              <tr class="tb-row">
                <th class="th-custom" scope="row">
                  <input class="tb-check-input" type="checkbox" id="checkbox1">
                </th>
                <td class="td-custom">ICT3.001</td>
                <td class="td-custom">Introduction to Cryptography</td>
                <td class="td-custom">4</td>
              </tr>
              <tr class="tb-row">
                <th class="th-custom" scope="row">
                  <input class="tb-check-input" type="checkbox" id="checkbox2">
                </th>
                <td class="td-custom">ICT3.001</td>
                <td class="td-custom">Introduction to Cryptography</td>
                <td class="td-custom">4</td>
              </tr>
              <tr class="tb-row">
                <th class="th-custom" scope="row">
                  <input class="tb-check-input" type="checkbox" id="checkbox3">
                </th>
                <td class="td-custom">ICT3.001</td>
                <td class="td-custom">Introduction to Cryptography</td>
                <td class="td-custom">4</td>
              </tr>
              <tr class="tb-row">
                <th class="th-custom" scope="row">
                  <input class="tb-check-input" type="checkbox" id="checkbox4">
                </th>
                <td class="td-custom">ICT3.001</td>
                <td class="td-custom">Introduction to Cryptography</td>
                <td class="td-custom">4</td>
              </tr>
              <tr class="tb-row">
                <th class="th-custom" scope="row">
                  <input class="tb-check-input" type="checkbox" id="checkbox5">
                </th>
                <td class="td-custom">ICT3.001</td>
                <td class="td-custom">Introduction to Cryptography</td>
                <td class="td-custom">4</td>
              </tr>
              
            </tbody>
          </table>
    </div>

        <!-- Submit Button -->
        <div class="container mt-4 text-end">
          <button type="submit" class="btn submit-btn btn-primary btn-lg">Submit</button>
        </div>

       <!-- Footer -->
       <?php include '../footer/footer.php'; ?>

    </body>
</html>