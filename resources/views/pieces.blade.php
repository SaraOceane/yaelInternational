@extends('layouts.app_client')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">Alerts Center</h6>
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
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
            <h1 class="h3 mb-4 text-gray-800">Pièces à fournir</h1>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Pièce d'identité</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Prenez une "bonne" photo de votre pièce d'identité (CNI ou passeport ...)</div>
                                    <br>
                                </div>
                                <div class="col-auto">
                                    <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control-file mb-2" id="fileInput1" required>
                                        <button type="button" class="my-2 d-sm-inline-block btn btn-sm btn-secondary shadow-sm" onclick="previewFile('fileInput1', 'previewImg1')">
                                            <i class="fas fa-eye fa-sm text-white-50"></i> Aperçu
                                        </button>
                                        <img id="previewImg1" src="" alt="Aperçu de l'image" style="display: none; max-width: 100%; height: auto;" class="mt-2">
                                        <button type="submit" class="my-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fas fa-upload fa-sm text-white-50"></i> Importer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeat the above card for other file inputs -->

                <!-- Card 2 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Extrait de naissance</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Prenez une "bonne" photo de votre extrait de naissance original</div>
                                    <br>
                                </div>
                                <div class="col-auto">
                                    <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control-file mb-2" id="fileInput2" required>
                                        <button type="button" class="my-2 d-sm-inline-block btn btn-sm btn-secondary shadow-sm" onclick="previewFile('fileInput2', 'previewImg2')">
                                            <i class="fas fa-eye fa-sm text-white-50"></i> Aperçu
                                        </button>
                                        <img id="previewImg2" src="" alt="Aperçu de l'image" style="display: none; max-width: 100%; height: auto;" class="mt-2">
                                        <button type="submit" class="my-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fas fa-upload fa-sm text-white-50"></i> Importer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Casier judiciaire</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Prenez une "bonne" photo de votre casier judiciaire si vous êtes né(e)s à Abidjan</div>
                                    <br>
                                </div>
                                <div class="col-auto">
                                    <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control-file mb-2" id="fileInput3" required>
                                        <button type="button" class="my-2 d-sm-inline-block btn btn-sm btn-secondary shadow-sm" onclick="previewFile('fileInput3', 'previewImg3')">
                                            <i class="fas fa-eye fa-sm text-white-50"></i> Aperçu
                                        </button>
                                        <img id="previewImg3" src="" alt="Aperçu de l'image" style="display: none; max-width: 100%; height: auto;" class="mt-2">
                                        <button type="submit" class="my-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fas fa-upload fa-sm text-white-50"></i> Importer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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

<script>
function previewFile(inputId, imgId) {
    const input = document.getElementById(inputId);
    const previewImg = document.getElementById(imgId);
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewImg.style.display = 'block';
        }

        reader.readAsDataURL(file);
    } else {
        previewImg.src = '';
        previewImg.style.display = 'none';
    }
}
</script>

@endsection
