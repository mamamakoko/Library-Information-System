<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <title>Home</title>
</head>
<body>

    <div class="banner">
        <form action="index.php" method="post" class="form-wrapper">
            <div class="brand">
                <img src="./asset/logo.png">
                <p>WhiteCircle Library</p>
            </div>
            
            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username" class="input" required><br><br>
            <input type="password" name="password" placeholder="Password" class="input" required><br><br>

            <input type="submit" name="submit" value="Login" class="submit">

            <p>
                Don't have an account? Click <a href="register.php">here</a> to register.
            </p>
        </form>
    </div>
    

    <?php
        if(isset($_POST['submit'])) {
            require_once 'database.php';

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM ita212exercise WHERE username = '$username' AND password = '$password'"; 
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if($row['username'] === $username && $row['password'] === $password) {
                    echo "<h3 class='s-message'>Login success!</h3>";
                } else {
                    echo "<h3 class='e-message'>Invalid username or password.</h3>";
                }
            } else {
                echo "<h3 class='e-message'>Invalid username or password.</h3>";
            }
        }

    ?>


</body>
</html>