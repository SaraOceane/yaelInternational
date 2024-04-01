@extends('layouts.app_client')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>



                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle"
                            src="../img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Mon Dossier</h1>

            <!-- Informationts personnelles  -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Informations Personnelles</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">

                            <div class="d-flex text-body-secondary pt-3">
                              <p class="pb-3 mb-0 lh-sm border-bottom ">
                                <strong class="d-block text-gray-dark ">Nom</strong>
                                Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
                              </p>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                              <p class="pb-3 mb-0 lh-sm border-bottom">
                                <strong class="d-block text-gray-dark">Prénom</strong>
                                Some more representative placeholder content, related to this other user. Another status update, perhaps.
                              </p>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                              <p class="pb-3 mb-0 lh-sm border-bottom ">
                                <strong class="d-block text-gray-dark">Numéro</strong>
                                0021674320
                              </p>
                            </div>


                        <!-- Boutton modifier -->
                        <a href="#" class="btn btn-warning btn-icon-split my-3">
                            <span class="icon text-white-50">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- #end Informations personnelles -->

            <!-- #region -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                    <h6 class="m-0 font-weight-bold text-primary">Informations sur l'Entreprise</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample2">
                    <div class="card-body">

                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark ">Denomination</strong>
                              Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom">
                              <strong class="d-block text-gray-dark">Forme Juridique</strong>
                              Some more representative placeholder content, related to this other user. Another status update, perhaps.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Sigle usuel</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Enseigne</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Nombre d'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Nom et Prénoms de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">date de naissance de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Lieu de naissance de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Lieu de residence de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Numéro de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Part ou action de l'associé</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Capital</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>
                        <div class="d-flex text-body-secondary pt-3">
                            <p class="pb-3 mb-0 lh-sm border-bottom ">
                              <strong class="d-block text-gray-dark">Valeur nominale</strong>
                              This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                            </p>
                        </div>



                        <!-- Boutton modifier -->
                        <a href="#" class="btn btn-warning my-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- #end -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white ">
        <div class="container my-auto ">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; GROUPE YAEL INTERNATIONAL 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->


@endsection

