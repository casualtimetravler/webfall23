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

    <!--this table should have relation with signup form-->

    <div class="container mt-4">
        <h2>User Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                <?php
                // Include the PHP file with database connection details
                include 'connect.php';

                // Query to retrieve user data
                $sql = "SELECT * FROM `accounts`";
                $result = $conn->query($sql);



                // Display the data in an HTML table
                if ($result->num_rows > 0) {


                    while ($row = $result->fetch_assoc()) {
                        echo "
            <tr>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["password"] . "</td>
            <td>
              <button type='button' class='btn btn-danger btn-sm' onclick='deleteUser(" . $row["signupID"] . ")'>Delete</button>
            </td>
          </tr>";
                    }

                } else {
                    echo "No users found.";
                }

                // Close the database connection
                $conn->close();
                ?>




 



                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your custom script for handling delete functionality -->
    <script>
        function deleteUser(userId) {
            // Add your delete logic here, e.g., making an API call or updating the UI



            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_user.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Reload the page after deletion

                    alert('Deleting user with ID ' + userId);
                    location.reload();
                }
            };
            xhr.send("userId=" + userId);




        }
    </script>

    <center>
        <nav aria-label="Page navigation example">
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
        </nav>
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
</body>

</html>