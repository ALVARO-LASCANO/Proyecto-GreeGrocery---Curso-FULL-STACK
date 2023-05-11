<?php session_start()?>

<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top bg-dark" id="menu">
    <!-- <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-03 mb-4 bottom-border">Aqui va la marca</a> -->
    <div class="bottom-border mb-4 pt-3">
        <img src= "../<?php echo $_SESSION["avatar"] ?>" alt="" class="rounded-circle mr-3 mx-auto" width="50">
        
        <a href="#" class="text-white"><?php echo $_SESSION["nombre"] ?></a> 

    </div>
    <ul class="navbar-nav flex-column mt-4">
        <li class="nav-item"> <a href="dashboard.php" class="nav-link text-white p-3 mb-1 current"> <i class=" fas fa-home text-light fa-lg mr-3"></i>Panel de Control</a> </li>
        <li class="nav-item"> <a href="#>" class="nav-link text-white p-3 mb-1 sidebar-link"><i class=" fas fa-user text-light fa-lg mr-3"></i>Perfil</a> </li>
        <li class="nav-item"> <a href="visitas.php" class="nav-link text-white p-3 mb-1 sidebar-link"> <i class=" fas fa-chart-line text-light fa-lg mr-3"></i>Visitantes</a> </li>
        
        <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-1 sidebar-link"> <i class=" fas fa-envelope text-light fa-lg mr-3"></i>Mensajes</a> </li>
        <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-1 sidebar-link"> <i class=" fas fa-shopping-cart text-light fa-lg mr-3"></i>Ventas </a></li>        
        <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-1 sidebar-link"> <i class=" fas fa-chart-bar text-light fa-lg mr-3"></i>Chart</a> </li>
        <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-1 sidebar-link" data-toggle="modal" data-target="#setting"> <i class=" fas fa-wrench text-light fa-lg mr-3"></i>Configuraciones</a> </li>
        <li class="nav-item"> <a href="#" class="nav-link text-white p-3 mb-1 sidebar-link"> <i class=" fas fa-file-alt text-light fa-lg mr-3"></i>Documentation </a></li>

    </ul>
</div>

