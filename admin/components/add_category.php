<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
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
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Blog Category</h4>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="mb-3">
                        <?php insert_into_categories(); ?>
                        <?php delete_categories(); ?>
                    </div>
                    <form class="mb-3" action="" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="title" name="cat_title">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit_cat">Add Catgory</button>
                    </form>

                    <!---EDIT CATEGORY -->
                    <form action="" method="post" class="form-group">
                        <?php edit_categories(); ?>
                    </form>
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Category Title</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php find_all_categories(); ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>