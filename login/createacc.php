<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Create account - Hamro Grocery</title>
</head>

<body>
    <section class="features" id="login">
        <h1 class="heading">Creating your<span>Account</span></h1>

        <div class="box-container">
            <div class="box">
                <?php

                include("php/config.php");
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

                    //verifying the unique email
                
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {

                        mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

                        echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Login Now</button>";


                    }

                } else {

                    ?>
                    <form action="" method="post" class="login-form">
                        <h1>Enter your information</h1>
                        <label for="username">
                            <h2>Username: </h2>
                        </label>
                        <input type="text" placeholder="Type Your Username" class="box" name="username" id="username"
                            autocomplete="off" required>
                        <label for="email">
                            <h2>Email</h2>
                        </label>
                        <input type="text" placeholder="Type Your Email" class="box" name="email" id="email"
                            autocomplete="off" required>
                        <label for="age">
                            <h2>Age</h2>
                        </label>
                        <input type="number" placeholder="Enter Your Age" class="box" name="age" id="age" autocomplete="off"
                            required>
                        <label for="password">
                            <h2>Password</h2>
                        </label>
                        <input type="text" placeholder="Type Your Password" class="box" name="password" id="password"
                            autocomplete="off" required>
                        <h2>Already a member? <a href="index.php">Sign In</a></h2>
                        <input type="submit" name="submit" value="Create Now" class="btn" required>
                        <a href="index.php" class="btn">Go back</a>
                    </form>
                </div>
            <?php } ?>
        </div>
    </section>


</body>

</html>