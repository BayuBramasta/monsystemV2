<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Computer Rerservation</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- jquery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <!-- datatables -->
    <link href="{{  asset('css/datatables/dataTables.bootstrap5.css')  }}" rel="stylesheet" />
    <link href="{{  asset('css/datatables/responsive.bootstrap5.css')  }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">

        <a class="navbar-brand" href="index.html" style="width: 20%;"><img src="{{ asset('img/logo-its.png') }}" alt="" style="width: 35.5%; margin-left:15%;" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="teknisi">Teknisi</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="status">Status</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('reservasi.create') }}">Rerservation</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-2 text-white rounded-4" href="login" style="background-color: #1475b2ff; margin-top:15px; margin-right:15px;">Login</a></li>
            </ul>
        </div>

    </nav>