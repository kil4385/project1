<?php
$insert = false;
// error_reporting(0);
if (isset($_POST['name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("connection failer" . mysqli_connect_error());
  }
  // echo "sucess connecting to the server";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

  $sql = "INSERT INTO `project`.`project1` (`Name`, `Email`, `Textarea`, `Dt`) VALUES ('$name', '$email', '$text', current_timestamp());";
  // echo $sql;

  if ($con->query($sql) == true) {
    // echo("sucessfull inserted");
    $insert = true;
  } else {
    echo ("error: $sql <br> $conn->error");
  }
  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="contact-resp.css">
  <title>Document</title>
</head>

<body>
  <div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Our Branches</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Jaipur</a></li>
                <li><a class="dropdown-item" href="#">Ajmer</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Jodhpur</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.html" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <div class="home">
    <div class="home-head">
      <h1>Contact <span>Form</span></h1>
    </div>
  </div>

  <!-- form -->
  <section id="contact">
    <div class="contact-wrapper">

      <?php
      if ($insert == true) {
        echo "<p class='submitmsg'>Your form had been submited..</p>";
      }
      ?>;

      <!-- Left contact page -->

      <form id="contact-form" class="form-horizontal" role="form" method="post" action="contact.php">

        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
          </div>
        </div>

        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="text" required></textarea>

        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
          </div>

        </button>

      </form>

      <!-- Left contact page -->

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City,
                State</span></i></li>

          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                  href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>

          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#"
                  title="Send me an email">hitmeup@gmail.com</a></span></i></li>

        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

      </div>

    </div>

  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/596f399a21.js" crossorigin="anonymous"></script>
</body>

</html>