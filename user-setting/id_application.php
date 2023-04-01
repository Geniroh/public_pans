
                <div class="card-body">
                  <h4 class="card-title">PANS ID CARD APPLICATION</h4>
                  <form class="form-sample" action="" method="post" enctype="multipart/form-data">
                    
                    <p class="card-description">
                      Personal info
                    </p>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="first_name" required>
                            </div>
                            </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="last_name" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="middle_name">
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender" required>
                              <option value="M">Male</option>
                              <option value="F">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    <div class="row">
                      
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" type="date" name="dob" required>
                          </div>
                        </div>
                      </div>
                  
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-9">
                            <input type="file" name="img_file" class="form-control" required>
                          </div>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2" name="id_submit">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                  </form>
                </div>


                <?php



if(isset($_POST['id_submit'])){

  // require 'includes/db.php';

  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);


  $file = $_FILES['img_file'];

  $fileName = $_FILES['img_file']['name'];
  $fileTmpName = $_FILES['img_file']['tmp_name'];
  $fileSize = $_FILES['img_file']['size'];
  $fileError = $_FILES['img_file']['error'];
  $fileType = $_FILES['img_file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');
  // $fileNameNew = $first_name. $last_name. ".". $fileActualExt; 
  // $fileDestination =  'user-setting/uploads/'. $fileNameNew;

  if(in_array($fileActualExt, $allowed)){
    if($fileError == 0){
       if($fileSize < 1000000){
         $fileNameNew = $first_name. $last_name. ".". $fileActualExt; 

         $fileDestination =  'user-setting/uploads/'. $fileNameNew;

         move_uploaded_file($fileTmpName, $fileDestination);


         $xid = 0;
       } else{
         $xid = 1;
       }
    } else {
       $xid = 2;
    }
  } else{
    $xid = 3;
  }
  if(empty($first_name) || empty($last_name) || empty($gender) || empty($dob)){
    $xid = 4;
  }
  if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name) ) {
    $xid = 5;
  }

  

  if($xid == 0){
    $sql = "INSERT INTO pansIdCards( first_name, last_name, middle_name, gender, dob, img_name) VALUES('$first_name', '$last_name', '$middle_name', '$gender', '$dob', '$fileNameNew')";

    mysqli_query($conn, $sql);
  }
  
  
    
  



}



?>
<div class="text-center card">
                      <?php
                        if(isset($xid)){

                          switch ($xid) {
                            case 1:
                              echo "<h3 class='text-danger'>File size too large. You cannot upload above 1MB</h3>";
                              break;
                            case 2:
                              echo "<h3 class='text-success'>There was an error!</h3>";
                              break;
                            case 3:
                              echo "<h3 class='text-success'>You cannot upload this file type, ensure you have the acceptable extension(jpg, jpeg, png)</h3>";
                              break;
                            case 4:
                              echo "<h3 class='text-success'>Fill in all fields </h3>";
                              break;
                            case 5:
                              echo "<h3 class='text-success'>Incorrect name format </h3>";
                              break;
                            case 0:
                              echo "<span class='text-success h3'>Application succesful</span>";
                              break;
                            
                            default:
                              echo "";
                              break;
                          }
                        }


                      ?>
                    </div>