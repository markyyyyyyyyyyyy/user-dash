<?php
include ('config/db_conn.php');

session_start();

if(isset($_POST['submit']))
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$date = $_POST['date'];
$usertime = $_POST['usertime'];
$branch = $_POST['branch'];

$sql = "INSERT INTO appointments (email, contact_number, date, time, branch) VALUES (?,?,?,?,?)";
$stmtinsert = $conn->prepare($sql);

$result = $stmtinsert->execute([$email, $contact_number, $date, $usertime, $branch]);

if($result){
    echo 'Successfully Booked';
}else{
    echo 'error booking';
}

?>


<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dental Hospital Website Template | Smarteyeapps.com</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>

    <body>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-none d-md-block">
                            <ul class="left-info">
                                <li><i class="bi bi-envelope"></i> toothbookdentalcare@gmail.com</li>
                                <li><i class="bi bi-telephone"></i> 0917 624 3186</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="rit-info">
                                <li><i class="bi bi-stopwatch"></i> Mn - St: 8:00am - 9:00pm Sn: Closed</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12  mx-auto logo-col">
                             <a href="index.php">
                                 <img src="assets/images/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="nav-row">
                <div class="container">
                    <div id="menu-jk" class="nav-row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about.php">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="services.php">Services</a>
                          </li>
                          
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact US</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="booking-system.php">Book Now</a>
                          </li>
                         
                      </ul>
                  </div>
                  </div>
              </nav>
      </div>
    </div>
</div>
            
</header>
<!-----------------------------------booking system --------------------------------------------------->

<form class="row g-3" method="post">
<div class="container">
<style>
.regis-form{
    padding: 15px;
}

</style>

<div class="regis-form">
  <div class="col-md-6">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-12">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" name="contact_number" required placeholder="Contact Number">
  </div>
  <div class="col-12">
  <label for="date">Preferred date</label>
            <input type="date" id="date" name="date" required name="date"><br><br>
    
  </div>
  <div class="col-md-6">
  <label for="time">Preferred time:</label>
            <input type="time" id="time" name="usertime" required name="time"><br><br>
  </div>
  <div class="col-md-6">
    <label for="inputMessComs" class="form-label">Message/Comments </label>
    <input type="text" class="form-control" id="inputMessComs">
  </div>
  <div class="col-md-4">
    <label for="inputMessComm" class="form-label">Select Branch</label>
    <select id="inputMessComm" class="form-select" name="branch">
      <option selected>Panay Avenue Branch</option>
      <option>Bago Bantay (Santo Cristo Branch)</option>
    </select>
    </div>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      </label>
    </div>
  </div>
  <div class="col-12">
    <button name="submit" type="submit" class="btn btn-primary">Book Now</button>
  </div>
  </div>
</form>








<!--********************************* Footer Starts Here ********************************************-->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>About Us</h2>
                <p>Phasellus scelerisque ornare nisl sit amet pulvinar. Nunc non scelerisque augue. Proin et sollicitudin velit. </p>
                
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                        BlueDart
                        Marthandam (K.K District)
                        Tamil Nadu, IND 
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        info@smarteyeapps.com <br>
                        sales@smarteyeapps.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                       <i class="fas fa-mobile-alt"></i>
                   </div>
                   <div class="addet">
                    +23 323 43434 <br>
                    +1 3232 434 55
                </div>
            </div>
        </div>
        <div class="col-md-3 fotblog">
            <h2>From latest Blog</h2>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
        </div>
        <div class="col-md-3 glink">
            <ul>
                <li><a href="index.php"><i class="fas fa-angle-double-right"></i>Home</a></li>
                <li><a href="about_us.php"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                <li><a href="services.php"><i class="fas fa-angle-double-right"></i>Services</a></li>
                
                <li><a href="pricing.php"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                <li><a href="contact_us.php"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                <li><a href="logout.php"><i class="fas fa-angle-double-right"></i>Logout</a></li>
                
            </ul>
        </div>
        <div class="col-md-3 tags">
            <h2>Easy Tags</h2>
            <ul>
                <li>Finance</li>
                <li>Web Design</li>
                <li>Internet Pro</li>
                <li>Node Js</li>
                <li>Java Swing</li>
                <li>Angular Js</li>
                <li>Vue Js</li>
            </ul>
        </div>
    </div>
</div>
</footer>
<div class="copy">
    <div class="container">
        <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
        <span>
            <a><i class="fab fa-github"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>
</html>