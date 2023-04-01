<?php

    session_start();



    if(isset($_POST['signup'])){

        include_once "db.php";



        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);

        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

        $mat_no =  mysqli_real_escape_string($conn, $_POST['mat_no']);

        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $user_phone = mysqli_real_escape_string($conn, $_POST['user_phone']);

        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

        $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

        $mob = mysqli_real_escape_string($conn, $_POST['mob']);

        $exco = mysqli_real_escape_string($conn, $_POST['exco']);

        $user_pwd_check = mysqli_real_escape_string($conn, $_POST['user_pwd_check']);



        //Make Mat no upper case

        $mat_no = strtoupper($mat_no);

        // Error handlers

                        //Check if valid mat no

                if(!preg_match("/[uU]20[0-9]{2}\/4725[0-9]{2,3}/", $mat_no)){

                    header("Location: ../register.php?signup=5");

                    exit();

                }

                if(!preg_match("/[0-9]{10,11}/", $user_phone)){

                    header("Location: ../register.php?signup=6");

                    exit();

                }

                if($user_pwd != $user_pwd_check){

                    header("Location: ../register.php?signup=7");

                    exit();

                }

        if(empty($first_name) || empty($last_name) || empty($mat_no) || empty($user_phone) || empty($gender) || empty($user_pwd)){

            header("Location: ../register.php?signup=1");

            exit();

        } else{

            //Check input characters are valid

            if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name) ) {

                header("Location: ../register.php?signup=2");

                exit();

            } else {





                // Check if email is vaild

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                    header("Location: ../register.php?signup=3");

                    exit();               

                } else{

                    //Check if mat no is taken



                    $sql= "SELECT * FROM users WHERE mat_no = '$mat_no'";

                    $result = mysqli_query($conn, $sql);

                    $resultCheck = mysqli_num_rows($result);



                    if ($resultCheck > 0) {

                        header("Location: ../register.php?signup=4");

                        exit();

                    } else {

                        // Hashing Password

                        $hashedPwd = password_hash($user_pwd, PASSWORD_DEFAULT);



                        //Insert the user into the database



                        $sql = "INSERT INTO users (first_name, last_name, mat_no, gender, user_phone, exco, email, user_pwd, mob) VALUES ('$first_name', '$last_name', '$mat_no', '$gender', '$user_phone', 'default', '$email', '$hashedPwd', '$mob');";



                        mysqli_query($conn, $sql);

                        header("Location: ../register.php?signup=4");

                        exit();

                    }

                }

            }

        }



    } else{

        header("Location: ../register.php");

        exit();

    }