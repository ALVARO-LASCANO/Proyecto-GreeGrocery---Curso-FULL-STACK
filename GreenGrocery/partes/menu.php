
<nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Inicio</a>
                </li>

                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['nombre'])) { ?>
                        <a class="nav-link text-white" href="admin/dashboard.php">CPanel</a>
                    <?php  } else { ?>
                        <a class="nav-link text-white" href="login.php">Login</a>
                    <?php } ?>


                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>