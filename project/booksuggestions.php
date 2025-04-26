<!DOCTYPE html>
<html lang="en">
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
<body>

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
    <center>
 <div class ="tablesuggestions" >
    <h2>Book Suggestions</h2>
    <p>Here you can see the books that users have suggested to be added to the library.</p>
 <table style="border: 12px;">
      <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Discription</th>
        <th>Action</th>
      </tr>
    </table>
 </div>
 </center>

<center>


    <h2>Books</h2>

    <?php
    // Include the PHP file with database connection details
    include 'connect.php';

    // Query to retrieve user data
    $sql = "SELECT * FROM `suggestion`";
    $result = $conn->query($sql);



    // Display the data in an HTML table
    if ($result->num_rows > 0) {
        echo "<table border='1' class='table table-striped table-hover'>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["suggestionID"] . "</td>
                    <td>" . $row["Title"] . "</td>
                    <td>" . $row["Author"] . "</td>
                    <td>" . $row["Description"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No books found.";
    }

    // Close the database connection
    $conn->close();
    ?>











        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav> -->
    </center>
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

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-U7i/Z2HR6nG0J/7x8Lb6S5ryZ9T2+ApJWy5xLfc2L13xgtlNLbV1+tQbxI8VrFA"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    
</body>
</html>