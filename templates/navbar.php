<nav class="navbar navbar-expand-md pt-0 pb-0">
    <ul class="navbar-nav mr-auto menu">
        <a class="navbar-brand pt-1" href="#">
            <img class="mr-2 ml-2" src="assets/img/alpha.png" width="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <li id="dashboard" class="nav-item active">
            <a class="nav-link" href="dashboard.php"><i class="bi bi-speedometer"></i>&nbsp;Dashboard</a>
        </li>
        <li id="pages" class="nav-item">
            <a class="nav-link" href="pages.php"><i class="bi bi-file-earmark-text"></i>&nbsp;Pages</a>
        </li>
        <li id="posts" class="nav-item">
            <a class="nav-link" href="posts.php"><i class="bi bi-pencil-square"></i>&nbsp;Posts</a>
        </li>
        <li id="users" class="nav-item">
            <a class="nav-link" href="users.php"><i class="bi bi-people"></i>&nbsp;Users</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-person-circle"></i>&nbsp;Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</a>
        </li>
    </ul>
</nav>
<div class="container container-fluid breadcrumb-container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize active" aria-current="page"><?= $page ?></li>
        </ol>
    </nav>
</div>