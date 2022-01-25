<?php 
  session_start();
  include_once "php/database.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lavn</title>
    <!--Bootstrap 4-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <!--Scroll reveal Javascript-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!--Css files-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <header>
      <!--Navigation bar-->
      <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-xl" id="navbar">
          <h2 class="navbar-brand" href="#">Lavn</h2>
          <button
            class="navbar-toggler btn btn-outline-light mr-2"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-align-right text-dark"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link home" href="index.php"
                  >HOME
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#chef">CHEF</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#menu">MENU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#hours">HOURS</a>
              </li>
              <li class="nav-item">
                <a href="index.php#reservation" class="nav-link">RESERVATION</a>
              </li>
              <li class="nav-item">
                <a href="index.php#story" class="nav-link">STORY</a>
              </li>
              <?php if(!isset($_SESSION['customer_id'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
              </li>
              <?php }else{ 
              $sql = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = {$_SESSION['customer_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
              ?>
                <li class="nav-item">
                <a class="nav-link logout" href="php/logout.php?logout_id=<?php echo $row['customer_id']; ?>" >LOGOUT</a>
              </li>
              <?php }?>
              <li class="nav-item">
                <a class="nav-link" href="index.php#location">LOCATION</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>