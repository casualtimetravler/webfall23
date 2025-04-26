<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Australian Painter Library</title>
    <link rel="icon" href="Images/icon.png" type="image/icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
</head>
 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><i class="bi bi-book"></i> Welcome to Australian Painter Library </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Account.php">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logintoAdmin.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
<!--we need a good sql and coonection by the php-->
<body>

  <div id="formCarousel" class="carousel slide form-container" data-ride="carousel">
    <div class="carousel-inner">
      <!-- Login Form -->
      <div class="carousel-item active">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form id="loginForm" onsubmit="return validateLoginForm()" action="login.php" method="post">
              <div class="form-group">
                <label for="loginEmail">Email:</label>
                <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email" required>
              </div>
              <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <button class="btn btn-danger btn-block mt-3" onclick="nextForm()">Signup</button>
          </div>
        </div>
      </div>

      <!-- Signup Form -->
      <div class="carousel-item">
        <div class="card">
          <div class="card-header">
            Signup
          </div>
          <div class="card-body">
            <form id="signupForm" onsubmit="return validateSignupForm()" action="signup.php" method="post">
              <div class="form-group">
                <label for="signupName">Name:</label>
                <input type="text" class="form-control" placeholder="UserName" id="signupName" name="name" required>
              </div>
              <div class="form-group">
                <label for="signupEmail">Email:</label>
                <input type="email" class="form-control" placeholder="Email" id="signupEmail" name="email" required>
              </div>
              <div class="form-group">
                <label for="signupPassword">Password:</label>
                <input type="password" class="form-control" placeholder="Password" id="signupPassword" name="password" required>
                <label for="signupPassword">Re-TypePassword:</label>
                <input type="password" class="form-control" placeholder="Re-TypePassword" id="rePassword" required>
              </div>
              <button type="submit" class="btn btn-success">Signup</button>
            </form>
            <button class="btn btn-danger btn-block mt-3" onclick="prevForm()">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-light text-center py-3">
    <p>&copy; 2023 Australian Painter Library. All rights reserved.</p>
  </footer>
  <center>

    <a href="#" class="btn"><i class="bi bi-facebook"></i></a>
    <a href="#" class="btn"><i class="bi bi-linkedin"></i></a>
    <a href="#" class="btn"><i class="bi bi-youtube"></i></a>
    <a href="#" class="btn"><i class="bi bi-instagram"></i></a>
    <a href="#" class="btn"><i class="bi bi-pinterest"></i></a>
    <a href="#" class="btn"><i class="bi bi-snapchat-ghost"></i></a>
    <a href="#" class="btn"><i class="bi bi-android"></i></a>
  </center>
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
            var repassword = document.getElementById('rePassword').value;
            if (name === "" || email === "" || password === "" || repassword === "") {
            
                alert("All fields are required for signup.");
                
                return false;
            }
            
          if (password != repassword){
            alert("ENTER THE SAME PASSOWRD .");

            return false;
          }

            return true;
    }
  </script>
  <style>
    .fa {
      padding: 20px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 10px;
    }

    .fa:hover {
      opacity: 0.7;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-google {
      background: #dd4b39;
      color: white;
    }

    .fa-linkedin {
      background: #007bb5;
      color: white;
    }

    .fa-youtube {
      background: #bb0000;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }

    .fa-pinterest {
      background: #cb2027;
      color: white;
    }

    .fa-snapchat-ghost {
      background: #fffc00;
      color: white;
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }



    .fa-android {
      background: #a4c639;
      color: white;
    }
  </style>
</body>

</html>