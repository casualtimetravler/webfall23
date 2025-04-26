<!DOCTYPE html>
<html lang="en">
<head>
    <title>University Lectures</title>
    <link rel="icon" type="image/x-icon" href="komar_logo.png">
    <link rel="stylesheet" type="text/css" href="lecture.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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

    <div class="container">
    <section class="course card shadow-sm mb-4">
        <div class="card-body">
            <h2 class="card-title text-center text-primary mb-4">Operating System</h2>
            <div class="week">
                <h3 class="week-title">Lectures</h3>
                <?php include 'connect.php'; ?>
            </div>
        </div>
    </section>
</div>

    <?php
    $course_name = isset($_GET['course_name']) ? $_GET['course_name'] : 'Operating System';

$sql = "SELECT week, title, file_url FROM lectures WHERE course_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_name);
$stmt->execute();
$result = $stmt->get_result();

echo '<ul class="lectures list-group list-group-flush">';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="list-group-item"><a href="' . htmlspecialchars($row["file_url"]) . '">week ' . $row["week"] . ': ' . htmlspecialchars($row["title"]) . '</a></li>';
    }
} else {
    echo '<li class="list-group-item">No lectures available for this course.</li>';
}
echo '</ul>';

$stmt->close();
$conn->close();
?>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Komar University of Science and Technology. All Rights Reserved.</p>
            <p>
                <a href="privacy.html" class="text-decoration-none text-white">Privacy Policy</a>
                <a href="terms.html" class="text-decoration-none text-white">Terms of Service</a>
                <a href="contact.html" class="text-decoration-none text-white">Contact Us</a>
            </p>
            <div class="social-icons mt-2">
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