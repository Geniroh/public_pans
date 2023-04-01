<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-user-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PANS UNIPORT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>ADMIN PANEL</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Divider -->

    <div class="sidebar-heading">
        BLOG SETTINGS
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-pencil"></i>
            <span>Blog Posts</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SETTINGS:</h6>
                <a class="collapse-item" href="index.php?req=view_post">View all post</a>
                <a class="collapse-item" href="index.php?req=add_post">Add post</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?req=blog_category">
            <i class="fa fa-plus"></i>
            <span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?req=blog_comments">
            <i class="fas fa-fw fa-cog"></i>
            <span>Comments</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Divider -->


    <div class="sidebar-heading">
        PANSITE E-PORTAL
    </div>
    <li class="nav-item">
        <a class="nav-link" href="index.php?events">
            <i class="fas fa-fw fa-cog"></i>
            <span>Events</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hall of fame</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SETTINGS:</h6>
                <a class="collapse-item" href="index.php?view_all_famers">View all hall of famer's</a>
                <a class="collapse-item" href="index.php?hall_of_fame">Add to hall of fame</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?notice">
            <i class="fas fa-fw fa-cog"></i>
            <span>Noticeboard</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Divider -->

    <div class="sidebar-heading">
        ACADEMIC SETTINGS
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.php?material">
            <i class="fas fa-fw fa-cog"></i>
            <span>Materials</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quiz</span>
        </a>
        <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SETTINGS:</h6>
                <a class="collapse-item" href="index.php?add_quiz">Set Quiz</a>
                <a class="collapse-item" href="index.php?edit_quiz">Edit Quiz</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Divider -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <!-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p> -->
        <a href="mailto:irochibuzor@gmail.com" class="btn btn-success btn-sm">COntact Developer</a>
    </div>

</ul>
<!-- End of Sidebar -->