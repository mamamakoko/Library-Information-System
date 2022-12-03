<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="register_style.css">
    <title>Registration</title>
</head>

<body>
    <!-- <div class="content">
        <form action="signup.php" method="post" class="form-wrapper">
            <h1>Register</h1>
            <input type="text" name="firstName" placeholder="First Name" class="input">
            <input type="text" name="middleName" placeholder="Middle Name" class="input">
            <input type="text" name="lastName" placeholder="Last Name" class="input"><br><br>
            <input type="text" name="studentID" placeholder="Student ID" class="input">
            <input type="text" name="username" placeholder="Username" class="input"><br><br>
            <input type="password" name="password" placeholder="Password" class="input"><br><br>
            <input type="text" name="phone" placeholder="Phone Number" class="input"><br><br>

            <input type="submit" name="submit" value="Sign up" class="submit">

            <p>
                Already have an account? Click <a href="index.php">here</a> to log in.
            </p>
        </form>
    </div> -->


    <?php
    if (isset($_POST['submit'])) {
        require_once 'database.php';

        $userID = $_POST['userID'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if (empty($username) || empty($password) || empty($phone)) {
            echo "<h3 class='e-message'>All fields must be filled.</h3>";
        } else {
            $sql = "SELECT * FROM account WHERE username = '$username'";
            $unique = mysqli_query($conn, $sql);
            if (mysqli_num_rows($unique)) {
                echo "<h3 class='e-message'>Username already exists.</h3>";
            } else {
                $sql = "INSERT INTO account (username, password, phone)
                            VALUES ('$username', '$password', '$phone')";
                mysqli_query($conn, $sql);

                header("LOCATION: index.php");
                exit();
            }
        }
    }
    ?>
</body>

</html>