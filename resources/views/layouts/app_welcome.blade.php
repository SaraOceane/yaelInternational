<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>YAEL INTERNATIONAL</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href={{asset('img/yael-icone.ico')}} />
            <!-- Custom Google font-->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

            <!-- Core theme CSS (includes Bootstrap)-->
            <link href={{asset('css/styles.css')}} rel="stylesheet" />
        </head>
        <body class="d-flex flex-column h-100">
            <main class="flex-shrink-0">
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                    <div class="container px-5">
                        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">GROUPE YAEL INTERNATIONAL</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                                <li class="nav-item"><a class="nav-link" href={{route('welcome')}}>Accueil</a></li>
                                <li class="nav-item"><a class="nav-link" href={{route('register')}}>Créez Votre Entreprise</a></li>
                                <li class="nav-item"><a class="nav-link" href={{route('login')}}>Connectez Vous</a></li>
                                <li class="nav-item"><a class="nav-link" href={{route('contact')}}>Contactez Nous</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </main>

            @yield('content')
            <!-- Footer-->
            <footer class="bg-white py-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m- text-center">Copyright &copy; GROUPE YAEL INTERNATIONAL 2023</div></div>

                    </div>
                </div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src={{asset('js/scripts.js')}}></script>
        </body>
    </html>
