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
    <br>
    <center>
        <h3>Book Manager</h3>
    </center>
    <form method="post" action="add_book.php" enctype="multipart/form-data">
        <!-- Your form inputs here... -->
        <div class="input1">
            <input type="text" id="Books" placeholder="Books Name" name="name">
            <br>
            <input type="file" id="img" accept="image/*" name="image">
            <br>
            <input type="text" id="Author" placeholder="Author Name" name="author">
            <br>
            <input type="text" id="Descripthion" placeholder="Description" name="description">
            <br>
        </div>
        <center>

            <div class="submit">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </center>
    </form>
    <br>
    <center>
        <h2>Books in Library:</h2>
    </center>
    <table>
        <tr>
            <th>Books</th>
            <th>Image</th>
            <th>Author</th>
            <th>Description</th>
            <th>Action</th>
        </tr>


        <?php
        // Include the PHP file with database connection details
        include 'connect.php';

        // Query to retrieve user data
        $sql = "SELECT * FROM `books`";
        $result = $conn->query($sql);


        // Display the data in an HTML table
        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
        <td>" . $row["name"] . "</td>
        <td>'" . $row["image"] . "</td>
        <td>" . $row["author"] . "</td>
        <td>" . $row["description"] . "</td>
        <td class='action-buttons'>
            <button type='button' class='btn btn-danger' onclick='deleteBook(" . $row["bookID"] . ")'>Delete</button>
        </td>
        </tr>
        ";
            }

        } else {
            echo "No books found.";
        }

        // Close the database connection
        $conn->close();
        ?>



        <!-- Add more rows as needed... -->
    </table>

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

        <!-- Your custom script for handling delete functionality -->
    <script>
        function deleteBook(bookId) {
            // Add your delete logic here, e.g., making an API call or updating the UI



            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_book.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Reload the page after deletion

                    alert('Deleting book with ID ' + bookId);
                    location.reload();
                }
            };
            xhr.send("bookId=" + bookId);




        }
    </script>

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

    <style>
        body {}

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }

        table,
        th,
        td {
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
</body>

</html>