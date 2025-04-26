<!doctype html>
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


    <?php  include 'connect.php'
    isset($_GET['course_code']) ? $_GET['course_code'] : 'CPE2325';
    $sql = "SELECT title, description, video_url, prerequisites, credits, department, instructor FROM courses WHERE course_code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $course_code);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
    ?>


    <div class="back">
    <div class="container">
    </div>
        <div class="container my-5">
            <section class="course card shadow-sm my-3">
                <div class="card-body">
                    <h2 class="card-title text-center text-primary"><?php echo htmlspecialchars($course['title']); ?></h2>
                    <hr>
                    <p class="card-text text-center"><strong>Description:</strong><br><?php echo htmlspecialchars($course['description']); ?></p>
                    <?php if ($course['video_url']): ?>
                        <video controls class="card-img-top">
                            <source src="<?php echo htmlspecialchars($course['video_url']); ?>" type="video/mp4">
                        </video>
                    <?php endif; ?>
                    <hr>
                    <p><strong>Prerequisites:</strong> <a href="<?php echo htmlspecialchars($course['prerequisites']); ?>" class="text-decoration-none text-primary"><?php echo htmlspecialchars($course['prerequisites']); ?></a></p>
                    <p><strong>Credits:</strong> <?php echo htmlspecialchars($course['credits']); ?></p>
                    <p><strong>Course Code:</strong> <?php echo htmlspecialchars($course_code); ?></p>
                    <p><strong>Department:</strong> <?php echo htmlspecialchars($course['department']); ?></p>
                    <p><strong>Instructor:</strong> <?php echo htmlspecialchars($course['instructor']); ?></p>

                    <div class="text-center mt-4">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="lecture.php" class="btn btn-primary text-white"><i class="fas fa-book"></i> Lectures</a></li>
                            <li class="list-inline-item"><a href="path/to/syllabus.pdf" target="_blank" class="btn btn-primary text-white"><i class="fas fa-file-alt"></i> View Syllabus</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php
        } else {
            echo "<p>Course not found.</p>";
        }
    $stmt->close();
    $conn->close();
?>

    
        <footer class="bg-dark text-white text-center py-4 mt-1">
            <div class="container">
                <p>&copy; 2024 Komar University of Science and Technology. All Rights Reserved.</p>
                <p>
                    <a href="privacy.html" class="text-decoration-none text-white">Privacy Policy</a> |
                    <a href="terms.html" class="text-decoration-none text-white">Terms of Service</a> |
                    <a href="contact.html" class="text-decoration-none text-white">Contact Us</a>
                </p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/KomarUniversity" class="text-white me-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/KomarUniversity" class="text-white me-3" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/KomarUniversity" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
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
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+8f0i27/4vct26ptlFl+K5O7vn5EXy0VddDfpc91nQHdf92zlTD8bKbi5XUj6B" crossorigin="anonymous"></script>
    </body>
    </html>