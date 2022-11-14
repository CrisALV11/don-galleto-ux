<!DOCTYPE html>
<html lang="es">

<head>
    <title>Don Galleto</title>
    <meta charset="utf-8" />
    <meta name="description" content="Inicio que da acceso a el sistema de don galleto" />
    <meta name="keywords" content="galletas, inicio, don galleto, gestion" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Inicio" />
    <meta property="og:site_name" content="Don galleto sistema de gestión" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(/jet-html-free/assets/media/illustrations/sigma-1/14.png)">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <div class="w-lg-400px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <img alt="Logo" src="{{ asset('assets\media\logos\logo.svg') }}" width="200px" />
                    </div>
                    <form class="form w-100" novalidate="novalidate" data-kt-redirect-url="/jet-html-free/?page=index"
                        action="{{ url('/dashboard') }}">
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continuar</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets\plugins\global\plugins.bundle.js') }}"></script>
</body>

</html>
