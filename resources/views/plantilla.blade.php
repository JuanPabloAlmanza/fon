<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CRUD Laravel</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LaraTelefonos</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="/modelos"
                                >Modelos</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/telefonos">Telefonos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">@yield('contenido')</div>
    </body>
    <script
        type="text/javascript"
        src="{{ asset('js/bootstrap.bundle.min.js') }}"
    ></script>
</html>
