
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">My Profile</h4>
                  <!-- <p class="card-description">
                    
                  </p> -->
                  <form class="forms-sample" method="post" action="">
                    <?php $p_user_id = $_SESSION['user_id']; ?>
                    <div class="form-group">
                      <label for="p_first_name">First Name</label>
                      <input type="text" class="form-control" name="p_first_name"id="p_first_name" placeholder="Name" value="<?php echo $_SESSION['first_name'] ?> " required>
                    </div>
                    <div class="form-group">
                      <label for="p_last_name">Last Name</label>
                      <input type="text" name="p_last_name" class="form-control" id="p_last_name" placeholder="Name" value="<?php echo $_SESSION['last_name'] ?> " required>
                    </div>
                    <div class="form-group">
                      <label for="p_email">Email address</label>
                      <input type="email" class="form-control" name="p_email" id="p_email" placeholder="Email" value="<?php echo $_SESSION['email'] ?>"  required>
                    </div>
                    <div class="form-group">
                      <label for="p_email">Matriculation Number</label>
                      <input type="text" class="form-control" name="p_mat_no" id="p_mat_no" placeholder="Matriculation Number" value="<?php echo $_SESSION['mat_no'] ?>" required >
                    </div>
                    <div class="form-group">
                      <label for="p_email">Phone Number</label>
                      <input type="text" class="form-control" name="p_user_phone" id="p_user_phone" placeholder="Phone Number" value="<?php echo $_SESSION['user_phone'] ?>" required >
                    </div>
                    <div class="form-group">
                      <label for="p_gender">Gender</label>
                      <select class="form-control" id="p_gender" name="p_gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="p_user_pwd">Password</label>
                      <input type="password" name="p_user_pwd" class="form-control" id="p_user_pwd" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="p_submit">Update</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <?php

if(isset($_POST['p_submit'])){

  $p_first_name = mysqli_real_escape_string($conn, $_POST['p_first_name']);
  $p_last_name = mysqli_real_escape_string($conn, $_POST['p_last_name']);
  $p_mat_no = mysqli_real_escape_string($conn, $_POST['p_mat_no']);
  $p_gender = mysqli_real_escape_string($conn, $_POST['p_gender']);
  $p_email = mysqli_real_escape_string($conn, $_POST['p_email']);
  $p_user_phone = mysqli_real_escape_string($conn, $_POST['p_user_phone']);
  $p_user_pwd = mysqli_real_escape_string($conn, $_POST['p_user_pwd']);

  $hashedPwd = password_hash($p_user_pwd, PASSWORD_DEFAULT);

  $sql = "UPDATE users SET first_name = '$p_first_name', last_name = '$p_last_name', mat_no = '$p_mat_no', gender= '$p_gender', email = '$p_email', user_phone = '$p_user_phone', user_pwd = '$hashedPwd' WHERE user_id = '$p_user_id' ";

  $result = mysqli_query($conn, $sql);

  if($result < 1){
    echo "<sscript> alert('Update was unsuccessful, Try Again!')</script>";
  } else {
    echo "<script> alert('You have successfully updated your information')</script>";
  }
}



?>