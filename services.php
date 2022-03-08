<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="services.css">
    <meta charset="UTF-8">
    <title>Services</title>
</head>
<body>
<!--Our Services-->
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
<span class="error">* required field</span><br>

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
        <input type="text"id="capital"name="pesa" placeholder="Amount in Ksh."><br>
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
</body>
</html>