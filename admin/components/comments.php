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
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">View all post</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            <i class="fas fa-fw fa-cog text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header"></div>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Author</th>
                                <th scope="col">Comment(s)</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">In Response to</th>
                                <th scope="col">Date</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Unapprove</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John DOe</td>
                                <td>I like this article❤🤣</td>
                                <td>jd@test.com</td>
                                <td>Approved</td>
                                <td><a href="#">World Malaria Day</a></td>
                                <td>11/08/89</td>
                                <td><a href="#">APPROVE</a></td>
                                <td><a href="#">UNAPPROVE</a></td>
                                <td><a href="#">DELETE</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>John DOe</td>
                                <td>I like this article❤🤣</td>
                                <td>jd@test.com</td>
                                <td>Approved</td>
                                <td><a href="#">World Malaria Day</a></td>
                                <td>11/08/89</td>
                                <td><a href="#">APPROVE</a></td>
                                <td><a href="#">UNAPPROVE</a></td>
                                <td><a href="#">DELETE</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>John DOe</td>
                                <td>I like this article❤🤣</td>
                                <td>jd@test.com</td>
                                <td>Approved</td>
                                <td><a href="#">World Malaria Day</a></td>
                                <td>11/08/89</td>
                                <td><a href="#">APPROVE</a></td>
                                <td><a href="#">UNAPPROVE</a></td>
                                <td><a href="#">DELETE</a></td>
                            </tr>
                        </tbody>
                    </table> -->

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Author</th>
                                <th scope="col">Comment(s)</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">In Response to</th>
                                <th scope="col">Date</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Unapprove</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM comments ;";

                            $select_comment = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($select_comment)) {
                                $comment_id = $row['comment_id'];
                                $comment_post_id = $row['comment_post_id'];
                                $comment_author = $row['comment_author'];
                                $comment_email = $row['comment_email'];
                                $comment_status = $row['comment_status'];
                                $comment_date = $row['comment_date'];
                                $comment_content = $row['comment_content'];

                                echo "<tr>";
                                echo "<td>{$comment_id}</td>";
                                echo "<td>{$comment_author}</td>";
                                echo "<td>{$comment_content}</td>";
                                echo "<td>{$comment_email}</td>";


                                // $query = "SELECT * FROM categories WHERE cat_id = {$comment_post_id} ;";

                                // $edit_category_query = mysqli_query($conn,$query);
                                // while($row = mysqli_fetch_assoc($edit_category_query)){
                                //     $cat_id = $row['cat_id'];
                                //     $cat_title = $row['cat_title'];
                                // }
                                // echo "<td>{$cat_title}</td>";



                                echo "<td>{$comment_status}</td>";

                                $query = "SELECT * FROM post WHERE post_id = $comment_post_id ";
                                $select_post_id_query = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($select_post_id_query)) {
                                    $post_id = $row['post_id'];
                                    $post_title = $row['post_title'];

                                    echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
                                }




                                echo "<td>{$comment_date}</td>";
                                echo "<td><a href='comments.php?approve=$comment_id'>APPROVE</a></td>";
                                echo "<td><a href='comments.php?unapprove=$comment_id'>UNAPPROVE</a></td>";
                                echo "<td><a href='comments.php?delete=$comment_id'>DELETE</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php
                    if (isset($_GET['unapprove'])) {
                        $unapprove_comment_id = $_GET['unapprove'];

                        $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id =$unapprove_comment_id";

                        $unapprove_comment_query = mysqli_query($conn, $query);
                        header("Location: comments.php");

                        if (!$unapprove_comment_query) {
                            die("QUERY FAILED " . mysqli_error($conn));
                        }
                    }

                    if (isset($_GET['approve'])) {
                        $approve_comment_id = $_GET['approve'];

                        $query = "UPDATE comments SET comment_status = 'Approved'WHERE comment_id =$approve_comment_id";

                        $approve_comment_query = mysqli_query($conn, $query);
                        header("Location: comments.php");

                        if (!$approve_comment_query) {
                            die("QUERY FAILED " . mysqli_error($conn));
                        }
                    }

                    if (isset($_GET['delete'])) {
                        $del_comment_id = $_GET['delete'];

                        $query = "DELETE FROM comments WHERE comment_id = {$del_comment_id}";

                        $delete_query = mysqli_query($conn, $query);
                        header("Location: comments.php");

                        if (!$delete_query) {
                            die("QUERY FAILED " . mysqli_error($conn));
                        }
                    }


                    ?>
                </div>
            </div>
        </div>

    </div>

</div>