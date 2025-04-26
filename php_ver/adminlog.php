<!DOCTYPE html>
<html lang="en">

<head>
    <title>University Lectures</title>
    <link rel="icon" type="image/x-icon" href="komar_logo.png">
    <link rel="stylesheet" type="text/css" href="course.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
    background-color: #f8f9fa;
    }

    .form-container {
    max-width: 400px;
    margin: 50px auto;
    }

    .carousel-inner {
    transition: transform 0.5s ease-in-out;
    }
</style>

<body class="bg-light">
    <header class="bg-secondery text-white text-center py-2">
        <h1>Komar University's Course Catalog</h1>
        <p class="lead">Explore what each course offers</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="https://komar.edu.iq/">
                <img src="komar_logo.png" alt="Logo" style="width:40px; margin-right: 10px;" class="rounded-pill">
                Home
            </a>
            <!--smaller screens-->
            <div class="dropdown d-lg-none" type="button">
                <button onclick="myFunction()" class="dropbtn navbar-toggler-icon"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a class="nav-link" href="https://sc.komar.edu.iq/">Student Council</a>
                    <a class="nav-link" href="https://stc.komar.edu.iq/">Student Club</a>
                    <a class="nav-link" href="http://alumni.komar.edu.iq/">Alumni</a>
                    <a class="nav-link" href="https://komar.edu.iq/ciep/">CIEP</a>
                    <a class="nav-link" href="https://komar.edu.iq/kpdi/">KDPI</a>
                </div>
            </div>
            <!--larger screens-->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="https://sc.komar.edu.iq/">Student Council</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://stc.komar.edu.iq/">Student Club</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://alumni.komar.edu.iq/">Alumni</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://komar.edu.iq/ciep/">CIEP</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://komar.edu.iq/kpdi/">KDPI</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="admin.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost', 'root', '', 'university');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: admin.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Invalid email or password.</div>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

  <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Komar University of Science and Technology. All Rights Reserved.</p>
            <p>
                <a href="privacy.html" class="text-decoration-none text-white">Privacy Policy</a> |
                <a href="terms.html" class="text-decoration-none text-white">Terms of Service</a> |
                <a href="contact.html" class="text-decoration-none text-white">Contact Us</a>
            </p>
            <div class="social-icons mt-2">
                <a href="https://www.facebook.com/KomarUniversity" class="text-white me-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/KomarUniversity" class="text-white me-3" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/KomarUniversity" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+8f0i27/4vct26ptlFl+K5O7vn5EXy0VddDfpc91nQHdf92zlTD8bKbi5XUj6B" crossorigin="anonymous"></script>
</body>
</html>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    var currentFormIndex = 0;

    function nextForm() {
      currentFormIndex++;
      showForm();
    }

    function prevForm() {
      currentFormIndex--;
      showForm();
    }

    function showForm() {
      var forms = document.querySelectorAll('.carousel-item');
      currentFormIndex = (currentFormIndex + forms.length) % forms.length;

      var carousel = new bootstrap.Carousel(document.getElementById('formCarousel'));
      carousel.to(currentFormIndex);
    }

    function validateLoginForm() {
      var email = document.getElementById('loginEmail').value;
            var password = document.getElementById('loginPassword').value;

            if (email === "" || password === "") {
                alert("Both email and password are required for login.");
                return false;
            }

            // Additional validation can be added here if needed

            return true;
    }

    function validateSignupForm() {
      
            var name = document.getElementById('signupName').value;
            var email = document.getElementById('signupEmail').value;
            var password = document.getElementById('signupPassword').value;

            if (name === "" || email === "" || password === "") {
                alert("All fields are required for signup.");
                return false;
            }

            return true;
    }
  </script>

<script>

            
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function adjustDropdownPosition() {
    var dropdown = document.getElementById("myDropdown");
    var rect = dropdown.getBoundingClientRect();
    if (rect.right > window.innerWidth) {
        dropdown.style.left = "auto";
        dropdown.style.right = "0";
    } else {
        dropdown.style.left = "";
        dropdown.style.right = "";
    }
}

document.querySelector('.dropbtn').addEventListener('click', function() {
    adjustDropdownPosition();
});
</script>
<style>
body {

      }
table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
      }

table,th,td {
    border: 1px solid black;
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;

          }

form {
    padding: 10px;
    width: auto;
    align-content: center;
    top: 50%;
    left: 50%;
     }
 .input1 input {
    margin: 5px;
    padding: 10px;
    margin-left: 550px;
    width: auto;
    align-content: center;
    top: 50%;
    left: 50%;
    color: rgb(0, 0, 5);
    border-radius: 10px;
    border: 1px solid black;
        }

.input1 input:hover {
    background-color: #0ae6c13f;
    transition: 0.5s;
    box-shadow: 2px 2px 2px 2px #b7d317;

        }


    </style>


</html>