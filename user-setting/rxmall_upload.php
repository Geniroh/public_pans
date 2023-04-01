<?php
if (isset($_POST['rx_upload'])) {
    $user_id        = $_SESSION['user_id'];
    $brand = $_POST['brand_name'];
    $product_name       = $_POST['product_name'];
    $product_price       = $_POST['product_price'];
    $product_contact     = $_POST['product_contact'];
    $category  = $_POST['product_category'];
    $discount = $_POST['product_price_discount'];
    $description = $_POST['product_detail'];


    $file = $_FILES['img_file'];

    $fileName = $_FILES['img_file']['name'];
    $fileTmpName = $_FILES['img_file']['tmp_name'];
    $fileSize = $_FILES['img_file']['size'];
    $fileError = $_FILES['img_file']['error'];
    $fileType = $_FILES['img_file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = $brand . $product_name . "." . $fileActualExt;

                $fileDestination =  './assets/img/rxmall/';

                move_uploaded_file($fileTmpName, $fileDestination.$fileNameNew);
                $query = "INSERT INTO rxmall(user_id, brand_name, product_name, product_price, product_category,product_price_discount,contact,product_details, product_image) VALUES({$user_id},'{$brand}','{$product_name}', '{$product_price}','{$category}','{$discount}','{$product_contact}', '{$description}', '{$fileNameNew}') ";

                $create_product = mysqli_query($conn, $query);

                if (!$create_product) {
                    die("QUERY FAILED " . mysqli_error($conn));
                }
                $xid = 0;
            } else {
                $xid = 1;
                exit();
            }
        } else {
            $xid = 2;
            exit();
        }
    }
}


?>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-primary">Welcome <?php echo $_SESSION['first_name']; ?> want to sell on Rxmall</h4>
                <p class="card-description">
                    Great news, PANsites can now sell and/or advertise their goods and services on Pansuniport.com. We belive in helping each grow and expand.
                </p>
                <p class="card-description">
                    It quite simple, fill in the form containing your product or skill. Then you will be required to make a small token as directed by the Financial Secretary and that's all there is to it.
                </p>
                <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($xid)) {

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
                            case 0:
                                echo "<span class='text-success h3'>Application succesful</span>";
                                break;

                            default:
                                echo "";
                                break;
                        }
                    }


                    ?>
                    <div class="form-group">
                        <label for="name">Brand Name</label>
                        <input type="text" class="form-control" id="name" name="brand_name" placeholder="Enter your business brand name" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter your product name" required>
                    </div>
                    <div class="form-group">
                        <label for="product_category">Category</label>
                        <select class="form-control" id="product_category" name="product_category" required>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="accessories">Accessories</option>
                            <option value="health-beauty">Health & Beauty </option>
                            <option value="s-skill">Soft skills</option>
                            <option value="food-item">Food Items</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Price</label>
                        <input type="text" name="product_price" class="form-control" id="product_price" placeholder="N00.00" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Discount</label>
                        <input type="text" name="product_price_discount" class="form-control" id="product_price_discount" placeholder="0%" required>
                    </div>
                    <div class="form-group">
                        <label for="img_file">Product Image</label>
                        <input type="file" name="img_file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Enter your contact details below comma separated</label>
                        <input type="text" name="product_contact" class="form-control" id="product_contact" placeholder="Enter your contact details" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Please give details about this product.</label>
                        <textarea class="form-control" id="product_detail" rows="7" name="product_detail" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="rx_upload">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>