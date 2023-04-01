<?php

    if(isset($_POST['login'])){

        include 'db.php';
        session_start();

        $user_info = mysqli_real_escape_string($conn,$_POST['user_info']);
        $user_pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);

        //Error handlers
        // Check if empty
        if(empty($user_info)|| empty($user_pwd)){
            header("Location: ../login.php?err=1");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE mat_no ='$user_info' OR email = '$user_info'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: ../login.php?err=2");
                exit();
            } else{
                if($row = mysqli_fetch_assoc($result)){
                    //Dehashing password
                    $hashedPwdCheck = password_verify($user_pwd, $row['user_pwd']);
                    if ($hashedPwdCheck == false) {
                        header("Location: ../login.php?err=3");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        
                            if(isset($_POST['remember_me'])){
                                $cookie_name = "user";
                                $cookie_value = $row['first_name'];
                                setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
                            }



                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['first_name'] = $row['first_name'];
                            $_SESSION['last_name'] = $row['last_name'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['mat_no'] = $row['mat_no'];
                            $_SESSION['user_phone'] = $row['user_phone'];
                            $_SESSION['exco'] = $row['exco'];

                        header("location: ../user.php");
                        exit();
                    }

                }
            }
        }

    } else{
        header("Location: ../login.php?err=4");
        exit();
    }