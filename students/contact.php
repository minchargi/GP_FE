<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../students/contact.css">
    <script src="../students/contact.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
    <body>
        <!-- Navbar-->
        <?php include '../navbar/navbar.php'; ?>


        <div class="container mt-4">
            <p class="header-text">Contact Teacher</p>
            <form id="messageForm">
                <div class="mb-3">
                    <label for="teacherEmail" class="form-label">Teacher Email</label>
                    <input type="email" class="form-control" id="teacherEmail" placeholder="Enter teacher's email" required>
                </div>
                <div class="mb-3">
                    <label for="contactMethod" class="form-label">Contact Method</label>
                    <select class="form-select" id="contactMethod" required>
                        <option value="" disabled selected>Select contact method</option>
                        <option value="email">Email</option>
                        <option value="message">Message</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        
            <hr>
        
            <h2>Received Messages</h2>
            <ul id="receivedMessages" class="list-group">
                
            </ul>
        </div>
        
        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>