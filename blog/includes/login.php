<?php include "db.php"; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['user_password'];

    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);

    $query = "SELECT * FROM users WHERE username = '{$username}' OR user_email = '{$username}'";

    $select_user_query = mysqli_query($conn,$query);
    if(!$select_user_query){
        die("QUERY FAILED" . mysqli_error($conn));
    }

    while($row = mysqli_fetch_assoc($select_user_query)){
        $db_user_id = $row['user_id'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_email = $row['user_email'];
        $db_username = $row['username'];
        $db_user_role = $row['user_role'];
        $db_user_password = $row['user_password'];
    }
    if ($username == $db_username ||$username == $db_user_email && $password == $db_user_password) {
        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['role'] = $db_user_role;

        header("Location: ../admin");
    }else {
        header("Location: ../registration.php?err");
    }
}