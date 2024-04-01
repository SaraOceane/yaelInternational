<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{route('dashboard_client')}}>

        <div class="sidebar-brand-text mx-3">YAEL INTERNATIONAL </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Mon Dossier -->
    <li class="nav-item active">
        <a class="nav-link" href={{route('dashboard_client')}}>
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Mon Dossier</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pièces à fournir -->
    <li class="nav-item ">
        <a class="nav-link" href={{route('pieces')}}>
            <i class="fas fa-fw fa-upload"></i>
            <span>Pièces à fournir </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Document disponible -->
    <li class="nav-item ">
        <a class="nav-link" href={{route('documents')}}>
            <i class="fas fa-fw fa-download"></i>
            <span>Mes Documents</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Notification -->
    <li class="nav-item ">
        <a class="nav-link" href={{route('notifications')}}>
            <i class="fas fa-fw fa-bell"></i>
            <span>Notifications</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - signout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal" >
            <i class="fas fa-fw fa-sign-out-alt fa-rotate-180"></i>
            <span>Déconnexion</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
