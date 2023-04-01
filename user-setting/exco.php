

<div class="container mt-4">
    <h1 class="display-4 text-center">
        <span class="text-primary">  Exe</span>cutive Controls
    </h1>
    <div class="d-flex justify-content-end">
        <?php echo "Office: ". strtoupper($_SESSION['exco']); ?>
    </div>

    <p>
        Welcome to the PANS Uniport Executive control, what do you want to do
        
    </p>

    <div class="d-flex justify-content-start">
        
        <a href="https://wgh22.wghservers.com:2096/" class="alert alert-primary text-decoration-none" target="_blank"> <i class="ti-comment"></i> Check Mail</a>
    </div>

    <?php
    if(isset($_POST['add_event'])){
        $title = mysqli_real_escape_string($conn, $_POST['event_title']);
        $link = mysqli_real_escape_string($conn, $_POST['event_link']);
        $description = mysqli_real_escape_string($conn, $_POST['event_desc']);


        $event_img        =$_FILES['event_img']['name'];
        $post_image_temp   = $_FILES['event_img']['tmp_name'];
    
        $post_date         = date('d-m-y');
    
        $post_img_dir    = "user-setting/uploads/";
        move_uploaded_file($post_image_temp, $post_img_dir.$event_img);
     
        if(!empty($title)){
            $query = "INSERT INTO events(img_path, link, link_name, event_description, published_date) VALUES('$post_img_dir$event_img', '$link', '$title', '$description', '$post_date');";

            $create_event = mysqli_query($conn, $query);  

            if (!$create_event) {
                die("QUERY FAILED ".mysqli_error($conn));
            }
            echo "<p class='alert alert-success'>Update successful</p>";
        }
    
        
    
    }



?>

    
    <form class="my-4" action="" id="#add" method="post" enctype="multipart/form-data">
        <h4 class="text-primary mt-4">Add Event</h4>
        <p>Any Upcoming Events let everyone know, add now</p>
        <div class="form-group">
            <input type="text" name="event_title" id="title" class="form-control" placeholder="Event Title" required>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="event_img">Upload Image</label>
            <input type="file" class="form-control" name="event_img" id="event_img" required>
        </div>
        <div class="form-group">
            <input type="text" name="event_link" id="link" class="form-control" placeholder="#llink(event link if any)">
        </div>
        <div class="form-group">
            <textarea name="event_desc" id="" class="form-control" placeholder="Event description" required></textarea>
        </div>
        <input type="submit" value="Add Event" name="add_event" class="btn btn-primary btn-block">

    </form>
</div>