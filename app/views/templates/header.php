<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/src/css/style.css">
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <!-- nav-top  -->
    <div class="fixed-top">
        <!-- alert -->
        <div class="alert--color1 d-flex justify-content-center align-items-center gap-4 text-white py-2">
            <p class="pt-3">Hubungi admin BMTC</p>
            <a href="#" class="btn btn-outline-light">Whatsapp</a>
        </div>

        <!-- search-container -->
        <div class="search-container bg-white fixed-top transform--toRight">
            <!-- back -->
            <span class="backIcon left-0 absolute" onclick="backIcon('search-container')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
            </span>
            <!-- search -->
            <div class="search-2 d-flex justify-content-center align-items-center gap-4 text-white py-2">
                <div class="input-group mb-3 search-width pt-1 shadow">
                    <span class="input-group-text bg-white" id="inputGroup-sizing-default">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search searchIcon" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>

        <!-- navbar-top -->
        <div class="d-flex flex-row-reverse justify-content-between align-items-center">
            <!-- search -->
            <span onclick="backIcon('search-container')" class="bg-dark mt-2 py-2"
                style="border-radius: 20px 0 0 20px; opacity: 0.8;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search text-white searchIcon" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </span>
            <!-- hamburger-menu -->
            <button onclick="hamburgerMenuClick()" class="navbar-toggler d-lg-none d-block" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="border:none;">
                <span class="d-flex flex-column">
                    <div class="hamburger-1"></div>
                    <div class="hamburger-2"></div>
                    <div class="hamburger-3"></div>
                </span>
            </button>
        </div>

    </div>

    
    <!-- main -->
    <div class="row me-0 ">
        <!-- navbar-sidebar -->
        <div class="navbarSidebar col-xl-3 col-lg-4 col-md-6 col-8 position-fixed pt-5" style="z-index: 10;">
            <div class="navbarSidebar__list pt-5 my-5 ps-3">
                <img src="<?= BASEURL; ?>/src/img/logo.png" alt="logo.png" style="width: 110px; height: 80px;" class="mb-3">
                <div>
                    <li><a href="#" class=" text-white">Home</a></li>
                    <li><a href="../BMTC_aktifitas_konser/index.html" class="text-white">BMTC Aktifitas & Konser</a>
                    </li>
                    <li onclick="svgDropdown(this.classList, 'svgDropdown__item svg');" class="dropdown1">
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            class="text-white" aria-controls="collapseExample">
                            <span class="svgDropdown__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            Program Khusus
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul>
                                <li><a href="../Kelas_musik_for_fun/index.html" class="text-white">Kelas Music For
                                        Fun</a></li>
                                <li><a href="../Kelas_musik_theory/index.html" class="text-white">Kelas Music Theory /
                                        Program Sertifikasi</a></li>
                                <li><a href="../Coaching_class/index.html" class="text-white">Coaching Class (Privat by
                                        I Wayan Balawan)</a></li>
                                <li><a href="../Holiday_program/index.html" class="text-white">Holiday Program</a></li>
                            </ul>
                        </div>
                    </li>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-row-reverse  pe-0">

        <div class="row d-flex flex-row-reverse  pe-0">
        <!-- main content -->
        <div class="col-xl-9 col-lg-8 col-12 p-0">