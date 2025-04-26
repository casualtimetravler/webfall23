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

  <!-- Main Content -->
  <div class="container mt-4">
    <h2>Book Management</h2>

    <!-- Add Book Form -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add New Book</h5>
        <form action="insert.php" method="post">
          <div class="form-group">
            <label for="bookTitle">Title</label>
            <input type="text" class="form-control" id="bookTitle" placeholder="Enter book title" name="booktitle">
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" placeholder="Enter author name" name="author">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="4" placeholder="Enter book description"
              name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Add Book</button>
        </form>
      </div>
    </div>
    <br>
  
  </form>
  
    <!-- <div class="mt-4">
      <h5>Book List</h5>
      <ul class="list-group"> -->
    <!-- Example Book Item (Repeat as needed) -->
    <!-- <li class="list-group-item">
          <span class="font-weight-bold">Book Title:</span> Example Book Title<br>
          <span class="font-weight-bold">Author:</span> John Doe<br>
          <span class="font-weight-bold">Description:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </li>
      </ul>
    </div>

  </div> -->

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
</body>

</html>