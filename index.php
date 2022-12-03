<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <link rel="stylesheet" type="text/css" href="register_style.css">

    <title>White Circle</title>
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
                Don't have an account? Click <button type="button" id="myBtn">register</button>
            </p>
        </form>
    </div>

    <!-- Register Modal -->

    <div id="myModal" class="modal">
        <form action="signup.php" method="post" class="modal-content">
            <span class="close">&times;</span>
            <h1>Register</h1>
            <input type="text" name="userName" placeholder="User Name" class="input"><br><br>
            <input type="text" name="email" placeholder="Email" class="input"><br><br>
            <input type="text" name="phone" placeholder="Phone Number" class="input"><br><br>
            <input type="password" name="password" placeholder="Password" class="input">

        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {
        require_once 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM lis WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
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