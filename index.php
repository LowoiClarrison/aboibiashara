<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="testimonial.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <script src="https://kit.fontawesome.com/dd06602d3d.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aboi web</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbarScroll">
    <div class="container">
        <a class="navbar-brand" href="biashara.php">Biashara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav-ms-auto">
                <li class="nav-item active">
            
                
                <li><a href="contact.html"></i>Contact</a><br></li>
                <li class="nav-item">
                    <a class="nav-link" href="about us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
</body>
</html>

<!--main banner-->
<section class="bgimage" id="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h2 class="hero-title">Tujiinue Kibiashara</h2>
                <p class="hero-desc">Hello! You've got a Business Idea.?<br>Welcome!</p>
            </div>
        </div>
    </div>
</section><br><br>

<!--About section-->
<section id="About">
    <div class="wrapper">
        <h1 class="text-center">About Us</h1>
        <div class="row">
            <div class="image-section">
                <img src="Images/pexels-rodnae-productions-5922212.jpg" class="imageAboutPage" alt="">
                <div class="col-lg-8">
                    <p>We are a platform that promote development of business ideas</p>
                    <p> We are a platform that promote development of business ideas.If you've a winning business idea
                        <br> and lack capital to start your business here is your chance to connect with Kenyan investors.</p>
                    <p>We also help people with enough capital and want to venture into business, show ways to generate better ideas
                        <br> to invest. Go to our services page and have a look at featured videos.
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<!--Services section-->
<!--Main form-->
<?php
            $nameErr = $phoneErr = $businessideaErr = $capitalErr = $locationErr = $emailErr = $passwordErr = $genderErr = "";
            $name = $phone = $businessidea = $capital = $location = $email = $password = $gender = "";

    if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
    if (empty($_POST["name"])){
    $nameErr = "Name is required";
    }else{
    $name = test_input($_POST["name"]);
    }
    if (empty($_POST["phone"])){
    $phoneErr = "Name is required";
    }else{
    $phone = test_input($_POST["phone"]);
    }
    if (empty($_POST["businessidea"])){
    $businessideaErr = "businessidea is required";
    }else{
    $name = test_input($_POST["businessidea"]);
    }
    if (empty($_POST["capital"])){
    $capital = "";
    }else{
    $capital = test_input($_POST["capital"]);
    }
    if (empty($_POST["location"])){
    $location = "";
    }else{
    $location = test_input($_POST["location"]);
    }
    if (empty($_POST["email"])){
    $emailErr = "email is required";
    }else{
    $email = test_input($_POST["email"]);
    }
    if (empty($_POST["password"])){
    $passwordErr = "password is required";
    }else{
    $password = test_input($_POST["password"]);
    }
    if (empty($_POST["password"])){
    $passwordErr = "password is required";
    }else{
    $password = test_input($_POST["password"]);
    }
    if (empty($_POST["gender"])){
    $genderErr = "password is required";
    }else{
    $gender = test_input($_POST["gender"]);
    }
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    <section id="Register">
        <div class="container-mg-3 pt-3">
            <h2 class="text-center">Biashara Registration Form</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>

            <label for="name">Full Names</label><br>
            <input type="text"id="name" name="jina" placeholder="Enter your full names">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            <label for="number">Phone Number</label><br>
            <input type="text"id="number" name="nambari" Enter your Phone Number>
            <span class="error">* <?php echo $phoneErr;?></span>
            <br><br>
            <label for="business">Business Idea</label><br>
            <input type="text"id="business" name="biashara" placeholder="Enter your Business Idea">
            <span class="error">* <?php echo $businessideaErr;?></span>
            <br><br>
            <label for="capital">Capital</label><br>
            <input type="text"id="capital"name="pesa" placeholder="Amount in Ksh.">
            <span class="error"><?php echo $capital;?></span>
            <br><br>
            <label for="location">Location</label><br>
            <input type="text"id="location"name="mahali"><br>
            <span class="error"><?php echo $location;?></span>
            <br><br>
            <label for="email">Email Address</label><br>
            <input type="email"id="email"name="baruapepe" placeholder="Enter a valid email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <label for="pass">Password</label><br>
            <input type="password"id="pass"name="nenosiri" placeholder="Enter password">
            <span class="error">* <?php echo $passwordErr;?></span>
            <br><br>
            <label for="radio">Gender</label><br>
            <label for="radio">Male</label>
            <input type="radio"id="radio"name="gender">
            <label for="radio">Female</label>
            <input type="radio"id="radio"name="gender">
            <label for="radio">Other</label>
            <input type="radio"id="radio"name="gender">
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="Submit"value="Submit"><br>
            </form>
            <?php
            echo "<h2>Your Input</h2>";
            echo $name;
            echo "<br>";
            echo $phone;
            echo "<br>";
            echo $businessidea;
            echo "<br>";
            echo $capital;
            echo "<br>";
            echo $location;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $password;
            echo "<br>";
            echo $gender;
            echo "<br>";
            ?>
        </div>
    </section>
<br>
<br>
<!--Our Clients-->
<section  class="Clients">
<div class="clients">
    <div class="view-box">
        <div id="testimonials">

            <div class="user">
                <img src="Image/WhatsApp%20Image%202022-02-08%20at%2011.10.05%20AM.jpeg" alt="">
                <p>How to create testimonials slider in html</p>
                <h3>Nakutan</h3>
            </div>

            <div class="user space">
                <img src="Image/WhatsApp%20Image%202022-02-08%20at%2011.10.05%20AM.jpeg" alt="">
                <p>How to create testimonials slider in html</p>
                <h3>Aboi</h3>
            </div>

            <div class="user">
                <img src="Image/WhatsApp%20Image%202022-02-08%20at%2011.10.05%20AM.jpeg" alt="">
                <p>How to create testimonials slider in html</p>
                <h3>Esuguru</h3>
            </div>

        </div>
        <div class="controls">
            <span id="control1"></span>
            <span id="control2" class="active"></span>
            <span id="control3"></span>
        </div>

    </div>
</div>
<script>
    var testimonials = document.getElementById('testimonials');
    var control1 = document.getElementById('control1');
    var control2 = document.getElementById('control2');
    var control3 = document.getElementById('control3');

    control1.onclick=function (){
        testimonials.style.transform = "translateX(870px)";
        control1.classList.add("active");
        control2.classList.remove("active");
        control3.classList.remove("active");
    }
    control2.onclick=function () {
        testimonials.style.transform = "translateX(0px)";
        control1.classList.remove("active");
        control2.classList.add("active");
        control3.classList.remove("active");
    }
    control3.onclick=function () {
        testimonials.style.transform = "translateX(-870px)";
        control1.classList.remove("active");
        control2.classList.remove("active");
        control3.classList.add("active");
    }

</script>
</section>

<!--Contact Us section-->
<section class="Contact">
    <div class="content">
        <h3>Contact Us</h3>
        <p>Get in Touch</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="Box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                    <h6>Postal Address</h6>
                    <p>101-30500 NAIROBI</p>
                </div>
                     <div class="Box">
                         <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div
                         <div class="text">
                           <h6>Phone</h6>
                            <p>+254743842653</p>
                         </div>
                    <div class="Box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h6>Email</h6>
                    <p>lowoi.esuguru@gmail.com</p>
                </div>
            </div>
                <div class="contactForm">
                    <form action="">
                        <h7>Send Message</h7>
                        <div class="inputSpace">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                        </div>
                        <div class="inputSpace">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputSpace">
                            <input type="text" name="" required="required">
                            <span>Type your message...</span>
                        </div>
                        <div class="inputSpace">
                            <input type="Submit" value="Send">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <!--footer section-->
<footer >
    <div class="footer">
        <li class="nav-item active">
            
                
            <li><a href="contact.html"></i>Contact us</a><br></li>



        <h4><strong>follow us</strong></h4><br>
       
    
        <br>
           <a href="Https://WWW.instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
           <a href="Https://WWW.gmail.com"><i class="fas fa-envelope"></i></a>
         
           <a href="Https://WWW.twitter.com"><i class="fab fa-twitter "></i></a>
           <br>
           <p>&copy;2022 all reseverd &trade;aboi clarison</p>
</body>
</html>