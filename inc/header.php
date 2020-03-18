<!DOCTYPE html>

<html>

<head>
  <title>BOB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="animation/jquery.waypoints.min.js"></script>
  <script src="animation/easy-waypoint-animate.js"></script>
  <script src="animation/main.js"></script>
</head>

<body class="home">
  <div class="site-content container">
    <div class="hero">
      <header>
        <div class="main-menu">
          <nav class="navbar navbar-expand-md navbar-light fixed-top" id="main_navbar">
            <div class="nav-content">
              <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a>
              <div class="two-btn">
                <div class="login-btn">
                  <a href="" data-toggle="modal" data-target="#myModal"><i class="fas fa-guitar"></i> Audition Open</a>
                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered first">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body popup-form">
                          <form>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" placeholder="Name Of the band" required>
                                </div>
                                <div class="form-group">
                                  <input type="email" placeholder="type your email address" required>
                                </div>
                                <div class="form-group">
                                  <input type="text" placeholder="District" required>
                                </div>
                                <div class="form-group">
                                  <input type="date" placeholder="Year of Establishment" required>
                                </div>
                                <div class="form-group form-phone">
                                  <select>
                                    <option>+977</option>
                                  </select>
                                  <input type="number" placeholder="Phone Number" required>
                                </div>
                                <div class="login-account">
                                  <button type="submit" class="innerBottom">Continue</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>

                      </div>
                    </div>
                    <div class="modal-dialog modal-dialog-centered second" style="display: none;">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body popup-form">
                          <form>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                  <input type="password" placeholder="Password" required>
                                </div>
                                <div class="account-manage">
                                  <div class="remember">
                                    <input type="checkbox"><span>Remember Me</span>
                                  </div>
                                  <div class="forget">
                                    <a href="#">Forget Password ?</a>
                                  </div>
                                </div>
                                <div class="login-account">
                                  <button type="submit" class="innerBottom">Log In</button>
                                </div>
                                <div class="login-with">
                                  <p>Login with</p>
                                </div>
                                <div class="form-group external-login">
                                  <a href=""><i class="fab fa-facebook-f"></i> Login with Facebook</a>
                                </div>
                                <div class="form-group external-login">
                                  <a href=""><i class="fab fa-google"></i> Login with Google</a>
                                </div>
                                <div class="register">
                                  Don't have an account? <a href=""><strong>Register</strong></a>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="side-menu"><a class="menu">Menu <img src="images/menu.png"></a></div>
              </div>
              <div class="body-overlay"></div>
            </div>
            <div id="mySidenav" class="sidenav">
              <button type="button" class="close" data-dismiss="modal">close <i class="fas fa-times"></i></button>
              <ol class="menu-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="https://www.youtube.com/channel/UCSKPcmDcWv0Vz9pNmJ0yMqw">Videos</a></li>
                <li><a href="event-format.php">Event/Show Format</a></li>
                <li><a href="judge.php">Judge & Host</a></li>
                <li><a href="sponsors.php">Sponsors</a></li>
                <li><a href="rules-regulation.php">Rules and Regulation</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ol>
              <div class="menu-contact">
                <div class="menu-address">
                  <p><i class="fas fa-map-marker-alt"></i> Newroad,<br> Kathmandu Nepal</p>
                  <p><i class="fas fa-envelope"></i> <a href="mailto:info@bobnepal.com">info@bobnepal.com</a></p>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>