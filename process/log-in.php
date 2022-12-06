<?php
    if (isset($_POST['submit'])) {
        require_once 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
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