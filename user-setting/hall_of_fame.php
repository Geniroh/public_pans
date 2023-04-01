<?php
    if(isset($_POST['add_hall'])){
        $name = mysqli_real_escape_string($conn, $_POST['hall_name']);


        $image = $_FILES['hall_img']['name'];
        $post_image_temp   = $_FILES['hall_img']['tmp_name'];
    
        $post_date         = date('d-m-y');
    
        $post_img_dir    = "./user-setting/img/";
       

        $office = mysqli_real_escape_string($conn, $_POST['hall_office']);
        $description = mysqli_real_escape_string($conn, $_POST['hall_desc']);

        if(!empty($name)){
            move_uploaded_file($post_image_temp, $post_img_dir.$image);

            $query = "INSERT INTO hallOfFame(hall_name, hall_img, hall_office, hall_description) VALUES('$name', '$image', '$office', '$description');";

            $create_hall = mysqli_query($conn,$query);

            if(!$create_hall){
                die("<p class='alert alert-danger'>There was an erro!</p>");
            }


        }else{
            echo "<p class='alert alert-danger'>Fill in all required fields</p>";
        }

    }


?>

<div class="container mt-4">
    <h1 class="display-4 text-center">
       Hall Of Fame
       <span class="d-block display-5"> Recognizing those who have contributed to the growth of PANS Uniport</span>
    </h1>

    <p class="d-block alert alert-info">
        Note this function is only accessible to the President.<br/>
        Fill the information below to add someone to the PANS Hall of fame<br/>
        Once added cannot be removed    
    </p>
    
    <form class="my-4" action="" id="#add" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="hall_name" id="" class="form-control" placeholder="Enter Individual Name" required>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="hall_img">Upload Individual Image</label>
            <input type="file" class="form-control" name="hall_img" id="hall_img" required>
        </div>
        <div class="form-group">
            <input type="text" name="hall_office" id="" class="form-control" placeholder="Enter Office held(if any)">
        </div>
        <div class="form-group">
            <textarea name="hall_desc" id="" class="form-control" placeholder="Enter Individual Description(Not more than 120 characters)" maxlength="120" required></textarea>
        </div>
        <input type="submit" value="Add to Hall of fame" name="add_hall" class="btn btn-primary btn-block">

    </form>
</div>