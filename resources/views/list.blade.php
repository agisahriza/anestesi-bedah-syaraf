<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logbook Bedah Syaraf</title>
    <link rel="shortcut icon" type="image/png" href="/images/logos/favicon.png" />
    <link rel="stylesheet" href="/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="/" class="text-nowrap logo-img">
                        <h5>
                            Logbook Bedah Syaraf
                        </h5>
                        <!-- <img src="/images/logos/dark-logo.svg" width="180" alt="" /> -->
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Logbook</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/list" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">List Logbook</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Buat Logbook</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">List Logbook</h5>
                        <div class="d-flex justify-content-end">
                            <a href="/create" target="_blank" class="btn btn-primary">Buat Logbook</a>
                        </div>

                        <div style="overflow: auto;">
                            <table class="table table-striped" style="overflow: auto;">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Usia</th>
                                        <th>RMK</th>
                                        <th>Diagnosa</th>
                                        <th>Tindakan</th>
                                        <th>ASA</th>
                                        <th>Anestesi</th>
                                        <th>Komorbid</th>
                                        <th>Jenis Operasi</th>
                                        <th>Tanggal</th>
                                        <th>Nama PPDS</th>
                                        <th>Mandiri/Supervisi</th>
                                        <th>Konsulen/DPJP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>An. Zaky M. Bintang</td>
                                        <td>15 thn</td>
                                        <td>1402501</td>
                                        <td>Moderate head injury + EDH temporal sinistra</td>
                                        <td>Craniotomi evakuasi</td>
                                        <td>III E</td>
                                        <td>GETA</td>
                                        <td></td>
                                        <td>Emergency</td>
                                        <td>01/04/2024</td>
                                        <td>dr. Noldy Tappangan</td>
                                        <td>Mandiri</td>
                                        <td>dr. Oky Susianto, Sp.An, KIC</td>
                                    </tr>
                                    <tr>
                                        <td>Ny. Radiatus Saada</td>
                                        <td>42 thn</td>
                                        <td>1558651</td>
                                        <td>SOL dt meningioma</td>
                                        <td>CTR</td>
                                        <td>III</td>
                                        <td>GETA</td>
                                        <td>HT on treatment</td>
                                        <td>Elektif</td>
                                        <td>01/04/2024</td>
                                        <td>dr. Luthfan Malik</td>
                                        <td>Supervisi</td>
                                        <td>Dr. dr. Kenanga Marwan S, Sp.An, KNA</td>
                                    </tr>
                                    <tr>
                                        <td>Ny. Radiatus Saadah</td>
                                        <td>42 thn</td>
                                        <td>155.86.51</td>
                                        <td>SOL dt susp meningioma</td>
                                        <td>CTR</td>
                                        <td>III</td>
                                        <td>GETA</td>
                                        <td>Increase of ICP (headache, Parese N. VII)</td>
                                        <td>Elektif</td>
                                        <td>01/04/2024</td>
                                        <td>dr. Rizky Adi Wardana</td>
                                        <td>Mandiri</td>
                                        <td>Dr. dr. Kenanga Marwan S, Sp.An, KNA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/sidebarmenu.js"></script>
    <script src="/js/app.min.js"></script>
    <script src="/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/libs/simplebar/dist/simplebar.js"></script>
    <script src="/js/dashboard.js"></script>
</body>

</html>