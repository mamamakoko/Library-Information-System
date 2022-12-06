<?php
    require_once './source/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./source/style.css">
    <link rel="stylesheet" type="text/css" href="./source/index_style.css">
    <link rel="stylesheet" type="text/css" href="./source/register_style.css">

    <title>White Circle</title>
</head>

<body>

    <div class="banner">
        <form action="./process/log-in.php" method="post" class="form-wrapper">
            <div class="brand">
                <img src="./asset/logo.png">
                <p>WhiteCircle Library</p>
            </div>

            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username" class="input" required><br><br>
            <input type="password" name="password" placeholder="Password" class="input" required><br><br>

            <input type="submit" name="submit" value="Login" class="submit">

            <p>
                Don't have an account? Click<button type="button" id="signup">Sign up</button>.
            </p>
        </form>
    </div>

    <?php
        require_once './process/log-in.php'
    ?>

    <!-- Register Modal -->

    <div id="myModal" class="modal">
        <form action="index.php" method="post" class="modal-content">
            <span class="close">&times;</span>
            <h1>Sign up</h1>
            <input type="text" name="userName" placeholder="User Name" class="input"><br><br>
            <input type="text" name="email" placeholder="Email" class="input"><br><br>
            <input type="text" name="phone" placeholder="Phone Number" class="input"><br><br>
            <input type="password" name="password" placeholder="Password" class="input">

            <button type="submit" name="register" id="register">Register</button>

        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("signup");

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

    


</body>

</html>