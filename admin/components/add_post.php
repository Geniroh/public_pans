<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Posts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_all_post_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Comments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_all_comment_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Categories
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_category_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Drafts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="row">

        <?php
        create_post();
        ?>

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Add post</h4>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_cat">Category</label>
                            <select name="post_category" id="" required class="form-control">
                                <?php
                                $query = "SELECT * FROM blog_categories";
                                $select_categories = mysqli_query($conn, $query);

                                confirmQuery($select_categories);


                                while ($row = mysqli_fetch_assoc($select_categories)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];


                                    echo "<option value='$cat_id'>{$cat_title}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post_author" class="form-label">Post Author</label>
                            <input type="text" class="form-control" id="post_author" name="post_author">
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_status">Post Status</label>
                            <select name="post_status" id="" required class="form-control">
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_desc">Post Description</label>
                            <select name="post_desc" id="" required class="form-control">
                                <option value="editors_pick">Editors pick</option>
                                <option value="popular">Popular</option>
                                <option value="trending">Trending</option>
                                <option value="featured">Featured</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Post Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image_caption">Image Caption</label>
                            <input type="text" name="image_caption" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_tags">Post Tags</label>
                            <input type="text" class="form-control" name="post_tags" required aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text" style="font-size: 11px;">This tags which should be comma separated, this helps in post search</div>
                        </div>

                        <div class="form-group">
                            <label for="post_content">Post Content</label>
                            <textarea class="form-control " name="post_content" id="postWsywig" cols="30" rows="10" required>
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="create_post">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>