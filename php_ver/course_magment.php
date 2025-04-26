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
    <center><h3>course Manager</h3></center>
    <form method="post" action="connection.php">
        <!-- Your form inputs here... -->
        <div class="input1">
            <input type="text" id="course_code" placeholder="course code" name="course_code">
            <br>
            <input type="text" id="title" placeholder="course Name" name="title">
            <br>
            <input type="text" id="discription" placeholder="course discription" name="discription">
            <br>
            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*">
            <br>
            <input type="text" id="prerequisites" placeholder="prerequisites" name="prerequisites">
            <br>
            <input type="text" id="credits" placeholder="credits" name="credits">
            <br>
            <input type="text" id="department" placeholder="Departments" name="departments">
            <br>
            <input type="text" id="instructor" placeholder="Instructor" name="instructor">
            <br>
        </div>
        <center>
            
        <div class="submit">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </center>
    </form>
    <?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course_code = $_POST['course_code'];
        $title = $_POST['title'];
        $description = $_POST['discription'];
        $prerequisites = $_POST['prerequisites'];
        $credits = $_POST['credits'];
        $departments = $_POST['departments'];
        $instructor = $_POST['instructor'];

        $sql = "INSERT INTO courses (course_code, title, description, prerequisites, credits, departments, instructor)
                VALUES ('$course_code', '$title', '$description', '$prerequisites', '$credits', '$departments', '$instructor')";

        if ($conn->query($sql) === TRUE) {
            echo "New course added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT course_code, title, description, prerequisites, credits, department, instructor FROM courses";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["course_code"]. "</td>
                    <td>" . $row["title"]. "</td>
                    <td>" . $row["description"]. "</td>
                    <td>" . $row["prerequisites"]. "</td>
                    <td>" . $row["credits"]. "</td>
                    <td>" . $row["department"]. "</td>
                    <td>" . $row["instructor"]. "</td>
                    <td class='action-buttons'>
                        <button type='button' class='btn btn-warning'>Edit</button>
                        <button type='button' class='btn btn-danger'>Delete</button>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No courses found</td></tr>";
    }

    $conn->close();
    ?>
    <br>
   <center><h2>courses:</h2></center> 
    <table>
        <tr>
            <td>Course Code</td>
            <td>Course Name</td>
            <td>Course Description</td>
            <td>Prerequisites</td>
            <td>Credits</td>
            <td>Departments</td>
            <td>Instructor</td>
            <td class="action-buttons">
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delet</button>
            </td>
        </tr>
    </table>

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