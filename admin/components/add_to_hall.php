<div class="container-fluid">
    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Hall Of fame</h4>
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
                <form>
                    <!-- <p>Any Upcoming Events let everyone know, add now</p> -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_image">Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Held</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="post_content">Famer Description</label>
                            <textarea class="form-control " name="post_content" id="postWsywig" cols="30" rows="10" required>
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <a href="#" class="btn btn-primary btn-block my-4">View all hall of famers</a>
                    <!-- <input type="submit" value="Add Event" name="add_event" class="btn btn-primary btn-block my-4"> -->

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Post Held</th>
                                <th scope="col">Date</th>
                                <th scope="col">Edit</th>
                                <!-- <th scope="col">Delete</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>John Doe</th>
                                <td>DOWH</td>
                                <td>11/08/89</td>
                                <td><a href="#">EDIT</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>John Doe</th>
                                <td>DOWH</td>
                                <td>11/08/89</td>
                                <td><a href="#">EDIT</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>John Doe</th>
                                <td>DOWH</td>
                                <td>11/08/89</td>
                                <td><a href="#">EDIT</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>