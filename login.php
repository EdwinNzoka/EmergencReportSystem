<?php

session_start();

include "connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($username)) {

        header("Location: auth.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: auth.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $username && $row['user_password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['user_name'];

                header("Location: dashboard.html");

                exit();


            }else{

                header("Location: auth.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: auth.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: dashboard.html");

    exit();
  }
